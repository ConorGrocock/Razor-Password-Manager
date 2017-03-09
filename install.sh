DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
echo "Checking for Composer"
COMPOSER_CMD=$(which composer)
if [[ "" == "$COMPOSER_CMD" ]]
then
    echo "Installing Composer"
    curl -sS https://getcomposer.org/installer | php -- --install-dir=bin
    COMPOSER_CMD=$(which composer)
else
    echo "Updating Composer"
    $COMPOSER_CMD selfupdate
fi
echo "Done installing composer"

$COMPOSER_CMD install;
