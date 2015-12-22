# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('ciudad', '0005_auto_20151222_0451'),
    ]

    operations = [
        migrations.AlterField(
            model_name='indicador',
            name='creado',
            field=models.DateTimeField(null=True, editable=False, blank=True),
            preserve_default=True,
        ),
    ]
