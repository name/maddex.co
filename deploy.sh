echo "Deploying personal website 'maddex.co'  using Docker Compose"

# Run Docker Compose to deploy Portainer from scratch
docker compose up -d --build

# Tidy up any unused Docker images
docker image prune -f

echo "Deployed successfully"