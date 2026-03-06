# Use Python oficial
FROM python:3.11-slim

# Diretório de trabalho
WORKDIR /app

# Copia dependências e instala
COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

# Copia todo o código
COPY . .

# Exponha a porta do Django
EXPOSE 8000

# Comando para rodar o servidor Django
CMD ["python", "manage.py", "runserver", "0.0.0.0:8000"]
