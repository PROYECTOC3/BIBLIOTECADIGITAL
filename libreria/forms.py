from dataclasses import field
from django import forms
from django import forms
from .models import Libro

class LibroForm(forms.ModelForm):

    class Meta: 
        model = Libro
        fields = '__all__'