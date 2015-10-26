
mysqldump.exe --host=localhost --protocol=tcp --user=root --password=<password> --port=3306 --default-character-set=utf8 --skip-triggers "<database>" > database.sql
pause 