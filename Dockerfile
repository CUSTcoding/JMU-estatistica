FROM python:3.11-slim

WORKDIR /app/jmu

# Copia requirements e instala dependências
COPY requirements.txt /app/
RUN pip install --no-cache-dir -r /app/requirements.txt

# Copia todo o projeto para /app
COPY . /app

# Expõe porta 8080
EXPOSE 8080

# Rodar o Django
CMD ["python", "manage.py", "runserver", "0.0.0.0:8080"]
