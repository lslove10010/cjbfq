module.exports = {
  apps: [
    {
      name: "php-app",
      script: "php",
      args: "-S 0.0.0.0:8080 -t public",
      interpreter: "none",
      env: {
        NODE_ENV: "development"
      },
      env_production: {
        NODE_ENV: "production"
      }
    }
  ]
};
