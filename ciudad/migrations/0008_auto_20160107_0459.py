# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('ciudad', '0007_auto_20151222_0458'),
    ]

    operations = [
        migrations.CreateModel(
            name='Dato',
            fields=[
                ('id', models.AutoField(verbose_name='ID', serialize=False, auto_created=True, primary_key=True)),
                ('tipo_variable', models.CharField(max_length=6, choices=[(b'char', b'caracter'), (b'int', b'numero entero'), (b'float', b'numero con pocos decimales')])),
                ('var_int', models.IntegerField(null=True, blank=True)),
                ('var_char', models.CharField(max_length=10, null=True, blank=True)),
                ('var_float', models.FloatField(null=True, blank=True)),
                ('creado', models.DateTimeField(null=True, editable=False, blank=True)),
                ('modificado', models.DateTimeField(null=True, editable=False)),
                ('fecha_indicador', models.DateTimeField()),
                ('ciudad', models.ForeignKey(to='ciudad.Ciudad')),
                ('indicador', models.ForeignKey(to='ciudad.Indicador')),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.RemoveField(
            model_name='indicador',
            name='ciudad',
        ),
        migrations.RemoveField(
            model_name='indicador',
            name='creado',
        ),
        migrations.RemoveField(
            model_name='indicador',
            name='fecha_indicador',
        ),
        migrations.RemoveField(
            model_name='indicador',
            name='modificado',
        ),
        migrations.RemoveField(
            model_name='indicador',
            name='tipo_variable',
        ),
        migrations.RemoveField(
            model_name='indicador',
            name='var_char',
        ),
        migrations.RemoveField(
            model_name='indicador',
            name='var_float',
        ),
        migrations.RemoveField(
            model_name='indicador',
            name='var_int',
        ),
    ]
