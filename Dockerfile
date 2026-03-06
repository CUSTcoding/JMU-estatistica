FROM python:3.11-slim

WORKDIR /app

# Volta para copiar requirements da raiz do projeto
COPY ../requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

# Copia todo o conteúdo da pasta atual (jmu/) para /app
COPY . .

EXPOSE 8000

# CMD agora aponta para manage.py dentro de /app
CMD ["python", "manage.py", "runserver", "0.0.0.0:8000"]
