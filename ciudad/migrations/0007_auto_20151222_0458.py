# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('ciudad', '0006_auto_20151222_0457'),
    ]

    operations = [
        migrations.AlterField(
            model_name='indicador',
            name='modificado',
            field=models.DateTimeField(null=True, editable=False),
            preserve_default=True,
        ),
    ]
