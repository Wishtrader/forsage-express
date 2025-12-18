#!/bin/bash

# Configuration
HOST="178.172.244.107"
USER="domen10"
PASS="@654321@"
RDIR="wp-content/themes/forsage"
LDIR=$(pwd)

# Cleanup function
cleanup() {
    echo "Stopping watcher..."
    exit 0
}
trap cleanup SIGINT SIGTERM

echo "🚀 Starting Instant File Watcher (Mac)"
echo "📡 Server: $HOST"
echo "📁 Local: $LDIR"

# Ensure we have fswatch
if ! command -v fswatch &> /dev/null; then
    echo "Error: fswatch is not installed."
    exit 1
fi

# Watch loop
# -0: use NUL character delimiter
# -r: recursive
# -l 0.2: latency 0.2s
# --event Updated: Only trigger on updates (and creation)
fswatch -0 -r -l 0.2 --event Updated --event Created --event Renamed \
    --exclude "\.git" \
    --exclude "\.vscode" \
    --exclude "\.DS_Store" \
    --exclude "node_modules" \
    --include "\\.(php|css|js|svg|png|jpg|json)$" \
    "$LDIR" | while read -d "" event
do
    # Check if file exists
    if [ ! -f "$event" ]; then
        continue
    fi

    # Get Relative Path
    REL_PATH="${event#$LDIR/}"
    
    # Ignore hidden files or unwanted
    if [[ "$REL_PATH" == .* ]]; then continue; fi

    echo "📝 Detected change: $REL_PATH"
    
    # Determine Remote Directory
    DIR_NAME=$(dirname "$REL_PATH")
    REMOTE_DIR="$RDIR/$DIR_NAME"
    
    # Upload Command
    # set ftp:ssl-allow no : Disable SSL if problematic or for speed if server supports plain (user used allow no in sync.sh)
    lftp -u "$USER,$PASS" $HOST <<EOF
    set ftp:ssl-allow no
    set net:timeout 5
    put -O "$REMOTE_DIR" "$event"
    bye
EOF
    
    if [ $? -eq 0 ]; then
        echo "✅ Uploaded: $REL_PATH at $(date +%T)"
    else
        echo "❌ Failed to upload: $REL_PATH"
    fi
done
