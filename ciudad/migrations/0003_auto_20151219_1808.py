# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('ciudad', '0002_auto_20151219_1802'),
    ]

    operations = [
        migrations.AlterField(
            model_name='indicador',
            name='modificado',
            field=models.DateTimeField(null=True),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='indicador',
            name='var_char',
            field=models.CharField(max_length=10, null=True),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='indicador',
            name='var_float',
            field=models.FloatField(null=True),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='indicador',
            name='var_int',
            field=models.IntegerField(null=True),
            preserve_default=True,
        ),
    ]
