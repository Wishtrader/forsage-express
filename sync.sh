#!/bin/bash

# Configuration
HOST="178.172.244.107"
USER="domen10"
PASS="@654321@"
RDIR="wp-content/themes/forsage"
LDIR="."

# Excludes for fswatch (Regex for files to ignore)
EXCLUDE_REGEX='(\.git|\.vscode|node_modules|sync\.sh|\.DS_Store|\.idea)'

# Settings for initial sync (mirror)
MIRROR_EXCLUDE="-X .git* -X .vscode* -X node_modules* -X sync.sh -X .DS_Store -X .idea* -X .git/ -X node_modules/"
OPTS="--verbose --only-newer --ignore-time --parallel=10 $MIRROR_EXCLUDE"

function upload_file() {
    local full_path=$1
    # Get relative path from current directory
    local rel_file=${full_path#$PWD/}
    
    # Skip if it's the sync script itself or matches exclude
    if [[ "$rel_file" == "sync.sh" ]] || [[ "$rel_file" =~ $EXCLUDE_REGEX ]]; then
        return
    fi

    if [ -f "$full_path" ]; then
        echo "📤 Uploading: $rel_file"
        lftp -u "$USER,$PASS" $HOST <<EOF
        set net:timeout 5
        set net:reconnect-interval-base 2
        set ftp:ssl-allow no
        put "$full_path" -o "$RDIR/$rel_file"
        bye
EOF
    fi
}

echo "🚀 Starting Intelligent Sync for macOS (fswatch)"
echo "📡 Server: $HOST"
echo "📁 Monitoring: $PWD"
echo "---------------------------------------------------"

# 1. Initial Sync (Ensure server is up to date at start)
echo "🔄 Performing initial sync..."
lftp -u "$USER,$PASS" $HOST <<EOF
set net:timeout 10
set net:reconnect-interval-base 2
set ftp:ssl-allow no
mirror -R $OPTS "$LDIR" "$RDIR"
bye
EOF
echo "✅ Initial sync complete."

# 2. Watch for changes and upload immediately
echo "👀 Watching for file changes..."
fswatch -r . | while read file; do
    upload_file "$file"
done
