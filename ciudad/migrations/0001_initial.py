# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Ciudad',
            fields=[
                ('id', models.AutoField(verbose_name='ID', serialize=False, auto_created=True, primary_key=True)),
                ('nombre', models.CharField(max_length=20)),
                ('habitantes', models.IntegerField()),
                ('region', models.CharField(max_length=10, choices=[(b'I', b'Tarapac\xc3\xa1'), (b'II', b'Antofagasta'), (b'III', b'Atacama'), (b'IV', b'Coquimbo'), (b'V', b'Valpara\xc3\xadso'), (b'VI', b"O'Higgins"), (b'VII', b'Maule'), (b'VIII', b'B\xc3\xado-B\xc3\xado'), (b'IX', b'La Araucan\xc3\xada'), (b'X', b'Los Lagos'), (b'XI', b'Ays\xc3\xa9n'), (b'XII', b'Magallanes'), (b'RM', b'Metropolitana'), (b'XIV', b'Los R\xc3\xados'), (b'XV', b'Arica y parinacota')])),
                ('clima', models.CharField(max_length=20)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
    ]
