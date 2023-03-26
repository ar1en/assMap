# Base image
FROM node:alpine

# Set working directory
WORKDIR /var/www/app/

# Copy package.json and package-lock.json
COPY ../frontend/package*.json ./
#COPY ../app/package.json ./

# Install dependencies
RUN npm install

RUN touch file1.txt
# Copy project files
COPY ../frontend .


# Expose port
#EXPOSE 3000

# Start the app
CMD ["npm", "start"]