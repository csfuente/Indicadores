[{% for indicador in indicadores %}
  {% if forloop.last %}
    '{{indicador.variable}}'
  {% else %}
  '{{indicador.variable}}',
  {% endif %}
{% endfor %}]