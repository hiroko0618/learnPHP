#!/usr/bin/env bash
#wait for the MySQL Server to come up
#sleep 90s

#run the setup script to create the DB and the schema in the DB
mysql -u admin_docker -p -D test_database < "$(dirname "$0")/001-create-tables.sql"
