tar -zcvf /var/www/html/www.tar.gz /var/www/html/*
sed -i "s/flag{this_is_fake_flags}/$FLAG/" /var/www/html/flag.php
export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
