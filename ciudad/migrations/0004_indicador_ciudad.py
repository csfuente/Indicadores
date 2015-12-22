# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('ciudad', '0003_auto_20151219_1808'),
    ]

    operations = [
        migrations.AddField(
            model_name='indicador',
            name='ciudad',
            field=models.ForeignKey(default=1, to='ciudad.Ciudad'),
            preserve_default=True,
        ),
    ]
