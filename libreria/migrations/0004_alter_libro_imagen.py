# Generated by Django 4.1.1 on 2022-10-12 14:09

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('libreria', '0003_alter_libro_descripcion_alter_libro_imagen_and_more'),
    ]

    operations = [
        migrations.AlterField(
            model_name='libro',
            name='imagen',
            field=models.ImageField(blank=True, null=True, upload_to='imagenes/', verbose_name='imagenes'),
        ),
    ]
