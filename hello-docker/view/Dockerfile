ARG COMMIT_SHA

FROM php:latest

ENV COMMIT_SHA=${COMMIT_SHA}

RUN apt update && \
    apt upgrade -y --no-install-recommends \
	mecab \
	libmecab-dev \
	mecab-ipadic \
	mecab-ipadic-utf8 && \
    apt clean && \
    rm -rf /var/lib/apt/lists/*

#RUN apt update && \
#    apt install -y --no-install-recommends \
#        php-mecab && \
#    apt clean && \
#    rm -rf /var/lib/apt/lists/*


