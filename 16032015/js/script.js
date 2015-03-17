$(document).ready(function(){
   var estados = ["ACRE","ALAGOAS","AMAZONAS","AMAPA","BAHIA","CEARA","DISTRITO FEDERAL","ESPIRITO SANTO","GOIAS","MARANHAO","MINAS GERAIS","MATO GROSSO DO SUL","MATO GROSSO","PARA","PARAIBA","PERNAMBUCO","PIAUI","PARANA","RIO DE JANEIRO","RIO GRANDE DO NORTE","RONDONIA","RORAIMA","RIO GRANDE DO SUL","SANTA CATARINA","SERGIPE","SAO PAULO","TOCANTINS"]
   var listaTipoPessoa = ["Aluno","Funcionario", "Administrador"];
   var listaEstadoCivil = ["Solteiro", "Casado", "Desquitado", "Divorciado", "Viúvo", "Separado", "Amigado"];
   var listaModelo = ["Fiat Palio", "Volkswagen Gol", "Fiat Strada", "Chevrolet Onix", "Fiat Uno", "Hyundai HB20", "Ford Fiesta", "Fiat Siena", "Volkswagen Fox/CrossFox", "Renault Sandero", "Chevrolet Prisma", "Volkswagen Saveiro", "Volkswagen Voyage", "Toyota Corolla", "Hyundai HB20S", "Volkswagen Up", "Ford EcoSport", "Honda Fit", "Honda Civic", "Chevrolet S10", "Renault Duster", "Chevrolet Classic", "Chevrolet Cobalt", "Renault Logan", "Ford Ka", "Toyota Hilux", "Chevrolet Celta", "Toyota Etios Hatch", "Chevrolet Spin", "Chevrolet Montana", "Citroën C3", "Toyota Etios Sedan", "Honda City", "Nissan March", "Fiat Punto", "Chevrolet Cruze Sedan", "Ford Ranger", "Fiat Fiorino", "Peugeot 208", "Ford Focus", "Mitsubishi L200", "Renault Clio", "Hyundai Tucson", "Volkswagen Amarok", "Chevrolet Cruze Hatch", "Fiat Idea", "Volkswagen Golf", "Nissan Versa", "Hyundai ix35", "Mitsubishi Pajero"];
   estados.forEach(function(estado){
        var option = $('<option>').html(estado); 
        $('select[name="estado"]').append(option);
   }) 
   listaTipoPessoa.forEach(function(tipoPessoa,i){
       var option = $('<option>').html(tipoPessoa).val(i+1);
       $('select[name="tipoPessoa"]').append(option);
   })
   listaEstadoCivil.forEach(function(estadoCivil,i){
       var label = $('<label>');
       var radio = $('<input type="radio" name="estadoCivil"/>').val(i+1);
       $(label).append(radio).append(estadoCivil);
       $('.estadoCivil').append(label);       
   })
   listaModelo.forEach(function(modelo, i){
       var label = $('<label>');
       var checkbox = $('<input type="checkbox" name="modelo">').val(obterSigla(modelo));
       $(label).append(checkbox).append(modelo + '<br>');
       var chance = randomIntFromInterval(1, 10);
       if(chance < 3)
           checkbox.attr('checked', true)
       $('.modeloCarro').append(label);
   })
})

function obterSigla(str){
    var arr = str.split(' ');    
    if(arr.length == 1)
        return arr[0].substr(0,2).toUpperCase()
    return arr[0].substr(0,1).toUpperCase() + arr[1].substr(0,1).toUpperCase();
}

function randomIntFromInterval(min,max)
{
    return Math.floor(Math.random()*(max-min+1)+min);
}