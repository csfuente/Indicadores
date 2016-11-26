# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('ciudad', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='Categoria',
            fields=[
                ('id', models.AutoField(verbose_name='ID', serialize=False, auto_created=True, primary_key=True)),
                ('nombre', models.CharField(max_length=50)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.CreateModel(
            name='Indicador',
            fields=[
                ('id', models.AutoField(verbose_name='ID', serialize=False, auto_created=True, primary_key=True)),
                ('variable', models.CharField(max_length=50)),
                ('descripcion', models.CharField(max_length=300)),
                ('estado', models.CharField(max_length=10)),
                ('var_int', models.IntegerField()),
                ('var_char', models.CharField(max_length=10)),
                ('var_float', models.FloatField()),
                ('creado', models.DateTimeField(editable=False)),
                ('modificado', models.DateTimeField()),
                ('fecha_indicador', models.DateTimeField()),
                ('tipo_variable', models.CharField(max_length=6, choices=[(b'char', b'caracter'), (b'int', b'numero entero'), (b'float', b'numero con pocos decimales')])),
                ('categoria', models.ForeignKey(to='ciudad.Categoria')),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.AlterField(
            model_name='ciudad',
            name='region',
            field=models.CharField(max_length=10, choices=[(b'I', b'Tarapaca'), (b'II', b'Antofagasta'), (b'III', b'Atacama'), (b'IV', b'Coquimbo'), (b'V', b'Valparaiso'), (b'VI', b'O Higgins'), (b'VII', b'Maule'), (b'VIII', b'Bio-Bio'), (b'IX', b'La Araucania'), (b'X', b'Los Lagos'), (b'XI', b'Aysen'), (b'XII', b'Magallanes'), (b'RM', b'Metropolitana'), (b'XIV', b'Los Rios'), (b'XV', b'Arica y parinacota')]),
            preserve_default=True,
        ),
    ]
