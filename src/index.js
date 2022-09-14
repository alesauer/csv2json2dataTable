new gridjs.Grid({
    search: true,
    resizable: true,
    sort: true,
    pagination: { enabled: true, limit: 50, summary: true },

    language: {
        'search': {
          'placeholder': 'Pesquisar...'
    },
        'pagination': {
            'previous': 'Anterior',
            'next': 'Proximo',
            'showing': 'Mostrando',
            'results': () => 'registros'
        }

    },
    
    columns: [
              { name: "Carimbo", hidden: true},
              { name: "EMAIL"},
              { name: "NOME"},
              { name: "SETOR", width: "10%"},
              { name: "VAI A FESTA?", width: "50%"}
            ],

    server: {
        url: 'http://127.0.0.1:8080/temp/csv2json2tableGrid/api/_get.php',
        then: data => data.map(campos => [campos.CARIMBO, campos.EMAIL, campos.NOME, campos.SETOR, campos.VAIFESTA])},

 
}).render(document.getElementById("wrapper"));