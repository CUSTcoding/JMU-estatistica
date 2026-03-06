from django.urls import path
from . import views

urlpatterns = [

    path("", views.formulario, name="formulario"),
    path("sucesso/", views.sucesso, name="sucesso"),

]