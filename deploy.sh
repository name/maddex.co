# Start the deployment to Docker
echo "Deploying personal website 'maddex.co' using Docker Compose"

# Run Docker Compose with --build to compile from scratch
docker compose up -d --build

# Tidy up any unused Docker images
docker image prune -f

# Completed deployment
echo "Deployed successfully"