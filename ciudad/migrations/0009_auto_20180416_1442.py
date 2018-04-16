# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('ciudad', '0008_ciudad_activado'),
    ]

    operations = [
        migrations.AddField(
            model_name='ciudad',
            name='lat',
            field=models.CharField(default=b'', max_length=25),
            preserve_default=True,
        ),
        migrations.AddField(
            model_name='ciudad',
            name='lon',
            field=models.CharField(default=b'', max_length=25),
            preserve_default=True,
        ),
        migrations.AddField(
            model_name='ciudad',
            name='nombre_simple',
            field=models.CharField(default=b'', max_length=120),
            preserve_default=True,
        ),
    ]
