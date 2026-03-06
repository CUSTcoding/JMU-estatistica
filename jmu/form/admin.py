from django.contrib import admin
from .models import Inquerito

# Register your models here.

@admin.register(Inquerito)
class InqueritoAdmin(admin.ModelAdmin):
    # mostrar todos os campos no list view
    list_display = (
        'nome_completo',
        'sexo',
        'data_nascimento',
        'naturalidade',
        'nacionalidade',
        'cargo_pastoral',
        'igreja_local',
        'classe',
        'estado_civil',
        'formacao_teologica',
        'formacao_academica',
        'cargo_igreja',
        'status_membro',
        'feedback',
        'criado_em',
    )
    list_filter = ('sexo', 'estado_civil', 'igreja_local')
    search_fields = ('nome_completo', 'igreja_local')
