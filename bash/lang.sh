cd ..
echo "Parsing..."
LIST=`find  . -name "*.php"`
/usr/bin/xgettext --language=PHP $LIST --from-code=UTF-8 --no-location --no-wrap -o /tmp/xgettext.pot

echo "Merging..."
cd langs

for lang_locale in * ; do
    if [ ! -f "$lang_locale/LC_MESSAGES/$lang_locale.po" ]; then
        continue
    fi
    echo $lang_locale
    cd "$lang_locale/LC_MESSAGES"
    /usr/bin/msgmerge "$lang_locale.po" /tmp/xgettext.pot -U --backup=control --no-wrap --no-fuzzy-matching
    cd ../../
done