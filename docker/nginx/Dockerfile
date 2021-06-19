FROM amazonlinux:latest

RUN yum -y update

RUN amazon-linux-extras install nginx1

RUN yum install -y git wget

ENTRYPOINT ["/usr/sbin/nginx", "-g", "daemon off;"]

COPY ./default.conf /etc/nginx/conf.d/default.conf
COPY ./image.conf /etc/nginx/conf.d/image.conf
COPY ./nginx.conf /etc/nginx/nginx.conf