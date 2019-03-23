#!/bin/bash
set -e
ssh -i ~/.ssh/healthonline $USER_STAGING_SERVER@$STAGING_SERVER -v exit
