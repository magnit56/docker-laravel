FROM node:18-alpine
WORKDIR /var/www/html
COPY package.json ./
COPY package-lock.json ./
RUN npm install
