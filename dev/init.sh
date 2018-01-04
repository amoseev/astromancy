#!/bin/sh
cp $(dirname $0)/../.env.dist $(dirname $0)/../.env
cp $(dirname $0)/../astromancy.env.example $(dirname $0)/../astromancy.env
cp $(dirname $0)/../workspace/.env.example $(dirname $0)/../workspace/.env