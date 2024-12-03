# Use a lightweight PostgreSQL image as the base
FROM postgres:15-alpine

# Set the environment variable for the PostgreSQL user
ENV POSTGRES_USER=sando
ENV POSTGRES_PASSWORD=sando
ENV POSTGRES_DB=workopia

# Create a volume to persist data
VOLUME /var/lib/postgresql/data

# Expose the PostgreSQL port
EXPOSE 5432

# Command to run when the container starts
CMD ["postgres"]