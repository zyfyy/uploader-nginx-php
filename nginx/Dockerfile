FROM zyfyy/uploader:latest AS static

FROM nginx:alpine
COPY ./conf.d/ /etc/nginx/conf.d/
COPY --from=static /app /var/www
