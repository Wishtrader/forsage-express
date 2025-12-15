#!/bin/bash

# Configuration
HOST="178.172.244.107"
USER="domen10"
PASS="@654321@"
RDIR="/wp-content/themes/forsage"
LDIR="."
# Excludes: .git, .vscode, node_modules, and this script itself
EXCLUDE="--exclude-glob .git* --exclude-glob .vscode* --exclude-glob node_modules* --exclude-glob sync.sh --exclude-glob .DS_Store"

# Settings
# parallel=2: Transfer 2 files at once
# only-newer: Only transfer files that are newer than destination
OPTS="--verbose --only-newer --parallel=2 $EXCLUDE"

# Check dependencies
if ! command -v lftp &> /dev/null; then
    echo "Error: 'lftp' is not installed. Install via 'brew install lftp'"
    exit 1
fi

echo "🔄 Starting Bi-Directional Sync"
echo "📡 Server: $HOST"
echo "📁 Local: $PWD"
echo "📂 Remote: $RDIR"
echo "ℹ️  Press [CTRL+C] to stop..."
echo "---------------------------------------------------"

while true
do
    # 1. Download: Server -> Local
    # We use a separate lftp session for each direction to keep it clean
    lftp -u "$USER,$PASS" $HOST <<EOF
    set net:timeout 10
    set net:reconnect-interval-base 2
    set ftp:ssl-allow no
    mirror $OPTS "$RDIR" "$LDIR"
    bye
EOF

    # 2. Upload: Local -> Server
    lftp -u "$USER,$PASS" $HOST <<EOF
    set net:timeout 10
    set net:reconnect-interval-base 2
    set ftp:ssl-allow no
    mirror -R $OPTS "$LDIR" "$RDIR"
    bye
EOF

    # Wait before next cycle
    sleep 2
done
