<?php
    session_start();
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT');
    header('Content-Type: text/javascript',true); 
    if(!isset($_SESSION['Chave_Arquivo_script']) || $_SESSION['Chave_Arquivo_script'] != '101000001110111010' ) {
     exit;
    }
    $_SESSION['Chave_Arquivo_script'] = '';
    unset($_SESSION['Chave_Arquivo_script']);
    
?>

/******************************************************************************/





const checkOnlineStatus = async () => {
  try {
    const online = await fetch("/genesis/assets/js_php/1px.png");
     //console.log('pixel perdido',online)
    return online.status >= 200 && online.status < 300; 
   
  } catch (err) {
    return false; 
  }
};

const estadoDaInternet  = async() =>{
    var oPaiTaOn;
    let online = await checkOnlineStatus();
    if(online){
        console.log('estado da internet esta online');
       oPaiTaOn ='1';
    }else{
        oPaiTaOn ='0';
        console.log('estas offline cara!!!');
        
    }
     return oPaiTaOn ;
}
 (async function(){
     let estado = await estadoDaInternet();
    // console.log(estado);
    if(estado =='1'){
        //console.log('ola novo mundo');
        
    }else{
        //console.log('mais rapido !!! aprende, pois assim esta dando erro');
    }
})();


var _ssTotal = 0,
    _xLen, _x;
for (_x in sessionStorage) {
    if (!sessionStorage.hasOwnProperty(_x)) {
        continue;
    }
    _xLen = ((sessionStorage[_x].length + _x.length) * 2);
    _ssTotal += _xLen;
    console.log(_x.substr(0, 50) + " = " + (_xLen / 1024).toFixed(2) + " KB")
};
console.log("Total = " + (_ssTotal / 1024).toFixed(2) + " KB");

for (_x in sessionStorage) {
    if (!sessionStorage.hasOwnProperty(_x)) {
        continue;
    }
    _xLen = ((sessionStorage[_x].length + _x.length) * 2);
    _ssTotal += _xLen;
    console.log(_x.substr(0, 50) + " = " + (_xLen / 1024).toFixed(2) + " KB")
};
console.log("Total = " + (_ssTotal / 1024).toFixed(2) + " KB");

/******************************************************************************/

function doSomething(f1,f2){
    f1('oi'),
    f2('lol')
    return 'laaaaa';
}

function successCallback(result) {
  console.log("It succeeded with " + result);
}

function failureCallback(error) {
  console.log("It failed with " + error);
}

doSomething(successCallback, failureCallback);
/******************************************************************************/

sessionStorage.setItem("nivel","<?php if(isset($_COOKIE['nivel_sessao'])): echo $_COOKIE['nivel_sessao'];else: echo '';endif;?>");

sessionStorage.setItem("lguser", "<?php if(isset($_COOKIE['lguser'])): echo $_COOKIE['lguser'];else: echo '';endif;?>");


window.addEventListener("load", function(event) {
    var nivelus = sessionStorage.getItem('nivel');
        if(nivelus == 1 || nivelus == '' || nivelus== null){
            menu(window.innerWidth)
        }
        
        var split_url = window.location.href;
        var url = split_url.split('/');
        var arrUrl = url[url.length - 1];
        console.log('arrUrl',arrUrl);
        
        var data = new Date();
        if(data.getDay() == 0){
            dtaegnda = data.getDate()+1; 
        }else{
            dtaegnda = data.getDate(); 
        }
        var dateAtlAgd = data.getFullYear()+'-'+(data.getMonth()+1)+'-'+dtaegnda;
        
        if(arrUrl == 'agenda'){
            getCalendario(dateAtlAgd);
        }
        
        if(arrUrl == 'admin'){
            getClientes('yes','admin');
            //setTimeout(function(){},1000);
        }
        
        if(arrUrl == 'vendas'){
            if(sessionStorage.getItem("contratar") != ''){
                setCliVend();
            }
        }
        
        //if(arrUrl == 'home'){
            /* sdk curtir and comments facebook */
            //$("#fb_link").append('<div id="fb-root"></div>');
            var obFb = JSON.stringify({crossorigin:"anonymous" , nonce:"HniZFc8q"});
            head('https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v10.0&appId=398075521126834&autoLogAppEvents=1',obFb);
        //}
        
        if(arrUrl == 'artigos' && nivelus == 3){
            createPost('edit',2);
        }
        //setLogsVerf();
});


/******************************************************************************/
    let obin =  JSON.stringify( ['','','',[{'t':'config','m':'get','op':'opGet','b':'p','fp':['*',[{'nome':'template'}],''],'p':'',"otr":""}] ] );
    
    var template = JSON.stringify([{'tag':'div','class':'gaf-12','id':'template','data':{'cookie':'template'},'childs':[{'tag':'div','class':'gaf-12','style':'','id':'header','childs':[{'tag':'div','class':'z-9','style':'','id':'','childs':[{'tag':'div','class':'gaf-12','style':'','id':'','childs':[{'tag':'div','class':'','style':'','id':'mymenu'}]}]}]},{'tag':'div','class':'gaf-12 dvaround','style':'','id':'views'},{'tag':'div','class':'gaf-12','style':'','id':'rodape'}]},['menu'],{'conf_tmp':{'dvx':'ini','r':'t'},'conf_fun':''}, [{'t':'itens_m','m':'get','op':'opGet','b':'pm','fp':['*','',''],'p':'','otr':'itensM'},{'t':'catgs','m':'get','op':'opGet','b':'p','fp':['*','',''],'p':'','otr':''}]  ]); //{'t':'modulos','m':'get','op':'opGet','b':'c','fp':['*','',''],'p':'','otr':''}
    
    
    /*
    console.log('objcoizinha',template);

    fp = [{}];
    fp[0]['config'] = ['',[{'nome':'obin'}],''];
            
     model('post','opUp','p',fp,'valor='+obin, (ob)=>{
        if(ob != false){
            console.log('ob',ob);
        }
    } );*/
    /*
window.addEventListener("load", function(event) {
   //localStorage.clear();

    var sprl = window.location.toString().split('/');
    // a variavel 'c' representa a categoria atual
    var c = sprl[sprl.length - 1];
    //pega o id do projeto
    const idp = sprl[3];

    if(c == idp){
        c = 'home';
    }
    /*
    if(localStorage.getItem('obin') != null){
        go(JSON.parse(localStorage.getItem('obin')));
    }else{
        console.log('req obin');
        model('get','opGet','p',[{'config':['*',[{'nome':'obin'}],'']}],'',(e)=>{
            console.log('start e ',e);
            let ob = JSON.parse(e[0].valor);
            localStorage.setItem('obin', JSON.stringify(ob) );
            
            go(ob);
        });
    }
    */
    // {0:} o 0 vai ser o de divs o 1 sera o de funcão e o 2 sera de parametros
    
//});


function go(e,n,call=0,parmcall=''){
        console.log('go');
        var sprl = window.location.toString().split('/');
        var g = sprl[3];
        var c = sprl[sprl.length - 1];
        
        if(c == g){
            c = 'home';
        }
        
        if(localStorage.getItem('tmpl') == null){
            localStorage.setItem('tmpl', JSON.stringify({'tmpl':{'t':{},'c':{},'m':{}} }) );
            localStorage.setItem('fun', JSON.stringify({'fun':{}}) );
            localStorage.setItem('conf', JSON.stringify({'conf':{'conf_tmp':{},'conf_fun':{},'conf_prm':{}} }) );
            localStorage.setItem('event', JSON.stringify({'event':[]  }) );
            
        }
        
        //seta fila array vazio;
        localStorage.setItem('fila', JSON.stringify( {'fila': []} ));
        
        if(call == 0){
            bisk(e,n);
        }else{
            call('',parmcall)
        }
        
        async function bisk(el,n){
            let estado = await estadoDaInternet();
           // console.log('el bisk ',el);
           
            if(typeof el == 'object' && estado == '1' ){
                var ref= '';
                el.forEach(function(i,v,a){
                   /* console.log('os objetos dos quatro',v);
                    console.log('console do i',i);
                    console.log('console do a',a);*/
                    
                    if(a[0] != ''){
                        ref = a[0].data.cookie;
                    }
                    if(v == 0 && i != ''){
                        let geter = JSON.parse(localStorage.getItem('tmpl'));
                        
                        geter.tmpl[a[2].conf_tmp.r][ref] = i;
                        
                        localStorage.setItem('tmpl', JSON.stringify( geter ));
                    }
                    if(v == 1 && i != ''){
                        let geter = JSON.parse(localStorage.getItem('fun'));
                        geter.fun[ref] = a[1];
                        
                        localStorage.setItem('fun', JSON.stringify( geter ));
                    }
                    if(v == 2 && i != ''){
                        let geter = JSON.parse(localStorage.getItem('conf'));
                        geter.conf.conf_tmp[ref] = a[2].conf_tmp;

                        geter.conf.conf_fun[ref] = a[2].conf_fun;
                        localStorage.setItem('conf', JSON.stringify( geter ));
                    }
                    if(v == 3 && i != '' && a[3].length > 0){
                        let geter = JSON.parse(localStorage.getItem('event'));

                        a[3].forEach(function(ie){
                            geter.event.push(ie);
                        });
                        
                        localStorage.setItem('event', JSON.stringify( geter ));
                    }
                    
                });
                console.log('cookie final - tmpl ',JSON.parse(localStorage.getItem('tmpl')) );
                console.log('cookie final - fun ',JSON.parse(localStorage.getItem('fun')) );
                console.log('cookie final - conf ',JSON.parse(localStorage.getItem('conf')) );
                console.log('cookie final - event ',JSON.parse(localStorage.getItem('event')) );
                
                console.log('ref doer',ref);
                doer(ref);
                
            }else{
                alert('fudeu bisk');
                
            }
            
        }
        
        function doer(rf='',op=''){
            if(rf != ''){
                if(op == 0 || op == ''){
                    //params
                    let cktmp = JSON.parse(localStorage.getItem('tmpl'));
                    let arr = cktmp.tmpl;
                    let ckcnf = JSON.parse(localStorage.getItem('conf'));
                    let cnf_t = ckcnf.conf.conf_tmp[rf].r;

                    let ob_prnt = arr[cnf_t][rf];
                    let cnf_dvx = ckcnf.conf.conf_tmp[rf].dvx;
                    let r = document.getElementById(cnf_dvx);
                    let ckfun = JSON.parse(localStorage.getItem('fun'));
                    
                    if(cnf_t == 't'){ // template
                        create(r,[ob_prnt]);  //create element
                        op4(1,rf); //eventos e callbacks
                        if(localStorage.getItem('ctg') != null){
                            vframe(c);
                        }
                    }else if(cnf_t == 'c'){ //categorias
                        if(localStorage.getItem('ctg') == null && arr[cnf_t][c] != null ){ //&& ckfun.fun[c] != null
                            var ckitns = JSON.parse(localStorage.getItem("itensM"));
                            console.log('itensM', ckitns);
                            if(ckitns != null){
                                ckitns.forEach(function(i){
                                    if(i.url == c){
                                        vframe(c);
                                    }
                                });
                            }else{
                                if(arr[cnf_t][c] != null && localStorage.getItem("ctg") == null){ //&& ckfun.fun[c] != null 
                                    fp = [{}];
                                    fp[0]['itens_m'] = ['*',['',{'id_ordem':'ASC'},''],''];
                                    
                                    model('get','opGet','pm',fp,'', (ob)=>{
                                        localStorage.setItem("itensM", JSON.stringify(ob));
                                        ob.forEach(function(i){
                                            if(i.url == c){
                                                vframe(c);
                                            }
                                        });
                                    });
                                }
                            }
                            
                        }
                    }else if(cnf_t == 'm'){
                        printer(ob_prnt.append,cnf_dvx);
                    }else if(cnf_t == 'p'){
                        
                    }
                    
                }
            }else{ //obin exec
                op4(1,rf);
            }
            
            
            //chamadas externas
            if(op == 1){
                op1(rf);
            }
            
            if(op == 4){
                op4();
            }
        }
        
        console.log('cookie final - tmpl ',JSON.parse(localStorage.getItem('tmpl')) );
        
    }
    
    function printer(h,r,ck='',fp=0){
        if(fp != 0){
            if(ck != ''){
                var chkck = JSON.parse(sessionStorage.getItem(ck));
                if(chkck !== null && typeof chkck !== undefined){
                    prntHtml(chkck,r,h);
                }else{
                    model('get','opGet',bnc,fp,'',(e)=>{
                        sessionStorage.setItem(ck,JSON.stringify(e));
                        prntHtml(e,r,h);
                    });
                }
            }else{
                model('get','opGet',bnc,fp,'',(e)=>{
                    prntHtml(e,r,h);
                });
            }
            
        }else{
            $(r).append(h);
        }
        
        function prntHtml(ob,r,h){
            ob.forEach(function(i){
                if(document.getElementById(r) !== null){
                    $(r).append(h);
                }
            });
        }
    }
    
    //exec eventos
    function op4(z='',rf=''){
        var arr = [];
        let cf = JSON.parse(localStorage.getItem('event'));
        var ar = cf.event;
        let ck = JSON.parse(localStorage.getItem('fila'));
    
        if(ck == null || ck.fila.length == 0){
            localStorage.setItem('fila', JSON.stringify( {'fila': ar} ));
            let ck = JSON.parse(localStorage.getItem('fila'));
            localStorage.setItem('event', JSON.stringify({'event':[]  }) );
            arr = ck.fila;
        }
    
        if(arr != '' && arr.length > 0){
            var verf = false;
            console.log('arr',arr);
            
            var arrlng = arr.length;
            arr.forEach(function(i,v,a){
                console.log('arr no foreach',arr);
                let cf = JSON.parse(localStorage.getItem('event'));
                if(cf.event.length > 0 ){
                    arr.push(cf.event);
                    
                    localStorage.setItem('fila', JSON.stringify( {'fila': arr} ));
                    console.log('fila arr doer ',arr );
                    localStorage.setItem('event', JSON.stringify({'event':[]  }) );    
                }
                
                let fp = [{}];
                fp[0][i.t] = i.fp;
                
                if(typeof i == 'object'){
                    //var artmpl = JSON.parse(localStorage.getItem('tmpl'));
                    //if(!artmpl.tmpl.t[rf] && !artmpl.tmpl.c[rf]){
                        model(i.m,i.op,i.b,fp,i.p,(e)=>{
                            if(e != false){
                                //del
                                arr.splice(0,1);
                                localStorage.setItem('fila', JSON.stringify( {'fila': arr} ));
                                
                                /*console.log('doer arr model ',arr);
                                console.log('doer arr limpo model',arr);*/
                                
                                if(i.otr != '' && i.otr.length > 0){
                                    console.log('i.otr',i.otr,e)
                                    localStorage.setItem(i.otr, JSON.stringify(e) );    
                                }else{
                                    console.log('e',e);
                                    e.forEach(function(f){
                                        if(typeof f.valor != undefined && f.valor != ''){
                                            let ob = JSON.parse(f.valor);
                                            
                                            //vai
                                            go(ob);
                                        }
                                    });
                                }
                                verf = true;
                            }else{
                                verf = false;
                               // alert_confrm('sem conexão com a bundinha');
                            }
    
                            if(arrlng == (v+1)){
                                console.log('verf ',verf);
                                if(verf == true){
                                    if(z == '1'){//call
                                        op1(rf);
                                    }
                                }
                            }
                        },vercinfgo ); //vercinfgo
                   /* }else{
                        go();
                    }*/
                }
                
            });
        }else{
            if(z == '1'){//call
                op1(rf);
            }
        }
        
    }
    
    //exec callbacks
    function op1(rf=''){
        if(rf != ''){
            console.log('rf',rf);
            let ck = JSON.parse(localStorage.getItem('fun'));
            let arr = ck.fun[rf];
            if(typeof arr != 'undefined' && arr.length > 0){
                var arkck = Object.keys(ck.fun);

                arr.forEach(function(i,v){
                    console.log('index',arkck.indexOf(i));

                    if(arkck.indexOf(i) != '-1'){
                        let e = decodeURIComponent(atob(ck.fun[i]));
                        console.log('fun fun',i);
                        var m = "("+e+")";
                        var xox = eval(m);
                        xox();
                    }else{
                        console.log('fun',i);
                        var m = "("+i+"())";
                        var xox = eval(m);
                    }
                });
            }
        }
    }
    
    function vframe(c){
        var els = document.getElementsByClassName("bxFrame");
        var a = Array.prototype.slice.call(els);
        a.forEach(function(i,v){
            i.style.display = 'none';
            if(a.length == (v+1)){
                if(document.getElementById(c) != null){
                    document.getElementById(c).style.display = 'block';
                }else{
                    console.log('vframe',c);
                    let cktmp = JSON.parse(localStorage.getItem('tmpl'));
                    let arr = cktmp.tmpl;
                    let ckcnf = JSON.parse(localStorage.getItem('conf'));
                    let cnf_t = ckcnf.conf.conf_tmp[c].r;
                    let ob_prnt = arr[cnf_t][c];
                    let cnf_dvx = ckcnf.conf.conf_tmp[c].dvx;
                    let r = document.getElementById(cnf_dvx);
                    let ckfun = JSON.parse(localStorage.getItem('fun'));
                    let mds = arr.m;
            
                    localStorage.setItem('ctg',c);
                    create(r,[ob_prnt]); //create element
                    console.log('ob prnti',ob_prnt);
                    
                    //carrega modulos
                    var df = ob_prnt.childs[1].childs;
                    if(df.length > 0){
                        df.forEach(function(l){
                            var m = l.id;
                            
                            if(typeof mds[m] == 'undefined'){
                                 model('get','opGet','c',[{'modulos':['*',[{'nome':m}],'']}],'',(e)=>{
                                    if(e != false){
                                        let ob = JSON.parse(e[0].valor);
                                        go(ob);
                                    }
                                });
                            }else{
                                let ob_prnt = arr.m[m];
                                let cnf_dvx = ckcnf.conf.conf_tmp[m].dvx;
                                printer(ob_prnt.append,cnf_dvx);
                            }
                        });
                    }
                    
                    // carrega funções/modulos callbacks
                    if(typeof ckfun.fun[c] != 'undefined'){
                        let fun = ckfun.fun[c];
                        fun.forEach(function(i,v){
                            if(typeof mds[i] == 'undefined'){
                                model('get','opGet','c',[{'modulos':['*',[{'nome':i}],'']}],'',(e)=>{
                                    if(e != false){
                                        if(e[0].valor!= ''){
                                            console.log('ob mod',e[0].valor)
                                            let ob = JSON.parse(e[0].valor);
                                            go(ob);
                                        }
                                    }else{
                                        console.log('não tem '+i+' no db');
                                    }
                                });
                            }
                            if((v+1 == fun.length)){
                                var g = setTimeout(function(){
                                    op4(1,c); //eventos e callbacks;
                                    clearTimeout(g);
                                },1000);
                            }
                        });
                    }
                
                }
            }
        });
        
    }
    
    
    async function vercinfgo(){
        alert_confrm('Falha na operação, confira a conexão com a Internet e Tente novamente mais tarde ');
        console.log('qualquer coisa uma frase');
        let cf = JSON.parse(localStorage.getItem('event'));
        console.log('cfcuzao',cf);
        var arr = JSON.parse(localStorage.getItem('fila'));
        console.log('arrcuzao',arr);
        
        if(cf.event.length > 0){
            arr.fila.push(cf.event);
        }
        console.log('arr push',arr);
        
        localStorage.setItem('fila', JSON.stringify( {'fila': []} ));
        console.log('vercinfgo ',arr );
        
        localStorage.setItem('event', JSON.stringify({'event':arr.fila  }) );  
        
        var interconf = setInterval(async function(){
            let estado = await estadoDaInternet();
            console.log('estado confeve',estado);
            if(estado == '1'){
                go('',doer,4);
                clearInterval(interconf)
            }else{
                
            }
            
        },5000);
        
       
    }
    
    
    
/********************************************************************/


    function create(r,arr){
        
        //i =elemento  v=contagem ultimo array ineiro
        function bost(arr,call){
            arr.forEach(function(el,v,a){
                var i = el;
                call(i,v,a);
            });
         }
     
        function creator(i,v,a){
            var  x = r;
            var el;
             
            //receba os indices do objeto
            var valind = Object.keys(i);
            //console.log(valind.length);
            
            //percorre os indices do  objeto
            for(y = 0; y < valind.length;y++){

                //nome do indica
                var k = valind[y];
                // valor do indice
                var vl = i[k];
              
                    if(k == 'tag'){
                        el = document.createElement(vl);
                        x.appendChild(el);
                    }
                    else if(typeof vl =='object'){
                       for(var tal in  vl){
                          // console.log('vldicapeta',vl[tal]);
                           //console.log('tal',tal);
                          // if(vl[tal].length > 0){
                             if(k == 'style'){
                                
                                el.style[tal] = vl[tal];
                                
                            }
                             if(k == 'data'){  
                             el.setAttribute('data-'+tal, vl[tal]) ;
                            }
                             if(k == 'childs'){
                                create(el,[vl[tal]]);
                            }
                          // }
                       }
                    }
                    else if(k == 'text' && vl != ''){
                        el.innerHTML = vl;
                        
                    }else{
                        el.setAttribute(k,vl);
                        
                    }
                    
            }

        }
        
        bost(arr,creator);
        
}




/********************************************************************/

//                LIB AUXILIARES

/********************************************************************/

/******************************************************************************/

/* 1 => metodo ('post' ou 'get');  
2=> operação ('get'=>'opGet','set'=>'opSet','update'=>'opUp' ou 'delet'=>'opDel'); 
3=> banco do proj ou banco central ('p' ou 'c'); 
4=> params da req do db (query de requisição no formato de [{'tabela':['*',[{'name':'joana'},{'id':'ASC'},'LIMIT 1'],'retn']}] );
5=> se o 'met' == 'post' ('data={}&otr=1'); 
6=>função de retorno (callback) ;

*/

/*

*/




    async function model(met,oprc,bnc,fun_par,post,callback=0,callErr=0,callOfCall=0){
        var locat = window.location;
        var splurl = locat.toString().split('/');
        var id_proj = splurl[3];
        
        //console.log('id_proj',id_proj)
        var bur = splurl[2]
        var id_proj2 = id_proj;
        var modo = 'desenvolvimento';
        
        var prms = {'met':met,'oprc':oprc,'bnc':bnc,'fun_par':fun_par,'id_proj':id_proj,'post':post,'bur':bur,'id_proj2':id_proj2,'modo':modo};
        //console.log(prms);
        
        var w = new Worker(genesis+'/assets/js/pdo.js');
    	let estado = await estadoDaInternet();
        //console.log('estado',estadoDaInternet);    
        
        if(estado == '1'){
        	w.postMessage(prms)

       	w.onmessage =  async function(e){
        	   //console.log('w.onmessage',(e));
        	   	let estado = await estadoDaInternet();
        	   	//console.log('estadoatual no onmessage',estado);
        	   	
        	    if(callback != 0 && estado == '1'){
        	        if(callOfCall != 0){
        	            callOfCall();
        	        }
        	        callback(e.data.return);
        	        
        	    }else{alert_confrm('sem conexão com a internet');}
        	    
        	}
    	}else{
    	    alert_confrm('sem conexão com a internet');
    	    removecover();

    		if(callErr != 0){
    		    callErr();
    		}
    	}
    }
    
/******************************************************************************/


/*
setTimeout(function(){document.getElementById("testelolaa").addEventListener('click',function(){
    model('get','opGet','c',[{'plugins':['*','','']}],'',(e)=>{
        console.log('aqui lol retorno req teste internet',e)
    });
},false);},1000);
    */
    
/******************************************************************************/

function setLogsVerf(){
    var w = new Worker(genesis+'/assets/js/modulo_get.js');
    w.postMessage({'ctr':'home/setLogsVerf'});

    w.onmessage = function(e){
        if(e.data.retn == true){
            window.location.href = "https://www.hafleuki.com.br";
        }
    }
}
/******************************************************************************/

function alert_confrm(frase,call=0,ref=0){
    coverh();
    if(call != 0){
        call();
    }
    jane('print_succs'+ref);
    
    $("#print_succs"+ref).append('<div class="gaf-12 bs2" style="max-width:350px;border-radius: 10px;"><div class="z-9" style="text-align: justify;padding-top: 10px;font-size: 15px;font-weight: 600;">'+frase+'</div><div class="z-6" style="margin-bottom: 5px;"><div class="sub_bot_d" onclick="removeJane(\''+'jane'+'\');" style="text-align: center;margin-top: 5%;margin-left: 0px;">OK</div></div></div>');
    removecover();
}

function enviar_form_file(id){
    $('#'+id).submit();
}

function show_box(box,oterbox = ''){
    if(document.getElementById(box) !== null){
        var caixa = document.getElementById(box).style.display;
        if(caixa == 'none'){
            document.getElementById(box).style.display = 'block';
            
        }else{
            document.getElementById(box).style.display = 'none';
        }
        if(oterbox != ''){
            var caixaoter = document.getElementById(oterbox);
            
            if(caixaoter !== null){
                if(caixaoter.style.display == 'none'){
                    document.getElementById(box).style.display = 'block';
                }else{
                    document.getElementById(box).style.display = 'none';
                }
            }
            
        }
    }
    
}

/******************************************************************************/
//formularios 

fileCollection = new Array();

function envFormImg(ref,url,call=0){
    var frm = $('#'+ref);
    frm.submit(function (e) {
        
        e.preventDefault();

		var index = $(this).index();
		var formdata = new FormData($(this)[0]);

		formdata.append('image',fileCollection[index]);

		var request = new XMLHttpRequest();
		request.open('POST',genesis+'/'+url, true);
        request.onreadystatechange = function() {
    		if(request.status == 200 && request.readyState == 4) {
    		    var retornoXhttp = JSON.parse(request.responseText);
    		    console.log(retornoXhttp);
    		    
    		    if(call != 0){
    		        call();
    		    }
    		}else if(request.status == 500){
    			console.log("erro envFormimg");
    		}
		}
	    request.send(formdata);
    });
    
} 


/****************************************************************************/
function prntUploadImg(){
    jane('bxUplImg');
    
    $("#bxUplImg").append('<div class="gaf-12 form"><form method="POST" enctype="multipart/form-data" id="form_img"><div class="gaf-12" style="margin-bottom: 5px;min-width:290px;"><input type="file" id="img_post" class="img_post" name="img_post" style="display:none;"><div class="btn_upload"><label style="cursor:pointer;" for="img_post" id="lablImgUpl">Upload Imagem</label></div></div><div id="prntimgnm" style="margin:7px;display:;"></div><div id="prntimg" style="margin:7px;"></div><div class="gaf-12" id="btnSubImg" style="display:none;text-align:center;margin-bottom:5%;"><input onclick="envFormImg(\''+'form_img'+'\',\''+'adm/downTmpImg'+'\');coverh();to64Img();" type="submit" value="OK"></div></form></div>');
    
    var el = document.getElementById("img_post");
    el.addEventListener("change", thumbmail, false);
    
}

/****************************************************************************/

function show_box_check(box=0,check,atdes,bloked=''){
        var caixa = document.getElementById(check);
        var divblocked = '';

        setTimeout(function(){
        
            if(caixa.checked == true){   
                $("#"+atdes).html('<span>ON</span>');
                divblocked = '';
            }else{
                 $("#"+atdes).html('<span>OFF</span>');
                 divblocked = '<div class="gaf-12 box_trn_blocked"><div class="zcentM box_trn_text">DESATIVADO</div></div>';
            }
            
            if(divBox !== null && box != 0){
                var divBox = document.getElementById(box);
                if(divBox.style.display == 'block'){
                    divBox.style.display = 'none';
                }else if(divBox.style.display == 'none'){
                    divBox.style.display = 'block';
                }
            }
            
            if(divblocked != ''){
                $("#"+bloked).html(divblocked);
            }
        },150);
    
    
}


function btn_show(el,el_btns=''){
    var content = document.getElementById(el);
    if(el_btns != ''){
    var btns = document.getElementsByClassName(el_btns);
        for(var b=0 ;b < btns.length;b++){
            if(btns[b].id != el){
                btns[b].style.display = 'none';
            }
        }
    }
    if(el != ''){
        //setTimeout(function(){
            if(content.style.display == 'none'){
                content.style.display = 'block';
            }else if(content.style.display == 'block'){
                content.style.display = 'none';
            }
       // },150);
        
    }
}

function openEl(el,thb,idbox,cl=0,cl2=0){
    if(cl != 0){
        var btns = document.getElementsByClassName(cl);
        for(var b=0 ;b < btns.length;b++){
            if(btns[b].style.display == 'block' && btns[b].id != idbox){
                btns[b].style.display = 'none';
            }
        }
    }
    if(cl2 != 0){
        var btns = document.getElementsByClassName(cl2);
        for(var b=0 ;b < btns.length;b++){
            if(btns[b].style.display == 'block'){
                btns[b].style.display = 'none';
            }
        }
    }
    var clas = thb;
    el.classList.toggle(clas);
    var content = document.getElementById(idbox);
    
    if(content.style.display == "block") {
        content.style.display = "none";
    } else if(content.style.display == "none"){
        content.style.display = "block";
    }
}


function alertSucc(f,l,h=''){
    $("#fscss").html(f);
    document.getElementById("myModal_scss2").style.display = 'block';
    if(l != 0){
        var els = document.getElementsByClassName(l);
        setTimeout(function(){
            for(var i=0; i < els.length;i++){
                els[i].value = '';
            }
            if(h != ''){
                $("#"+h).html('');
            }
        },2000);
    }
}

/********************** submit form met post *************************************/ 
    
function uppfrmI(r,tb,bnc,op,call=0,calerr=0,call2=0){
    $('#'+r).on("submit", function(e){
       e.preventDefault();
       var fp = [{}];
       fp[0][tb] = ['','','']

       var form = $(this).serialize();
       model('post',op,bnc,fp,form,call,calerr,call2);
       
       $('#'+r).off();
    });
};

/*************************************************/
// submit form update
function uppfrmU(r,fp=0,bnc,op,call=0,tb=0,id,calerr=0,call2=0){
    $('#'+r).on("submit", function(e){
       e.preventDefault();
       var form = $(this).serialize();
       if(fp == 0){
           fp = [{}];
           fp[0][tb] = ['',[{'id':id}],''];
       }
       model('post',op,bnc,fp,form,call,calerr,call2);
       
       $('#'+r).off();
    });
};


/*************************************************/
function enviar_form(ref,url,func=0){
    var frm = $('#'+ref);
    frm.submit(function (e) {
        e.preventDefault();
        var dados = frm.serialize();
		var xhttp = new XMLHttpRequest();

		xhttp.open("POST", genesis+"/"+url, true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xhttp.onreadystatechange = function() {

			if(xhttp.status == 200 && xhttp.readyState == 4) {
			     removecover();
			     if(func != 0){
			         var retornoXhttp = JSON.parse(xhttp.responseText);
			        func(retornoXhttp);
			     }
			}else if(xhttp.readyState == 0) {
			    removecover();
			    alert_confrm('Falha na conexão com a internet');
			}
			else if(xhttp.status == 500){
			     //console.log("erro enviar_form");
			    removecover();
                alert_confrm('Falha na conexão com a internet');
                
		    }
		}
		xhttp.send(dados);
    });
}

function sucss(div,content){
    $("#"+div).html('<span>'+content+'</span>');
    setTimeout(function(){$("#"+div).html('');},2500)
}
/******************************************************************************/

function alert_retn(e){
    removecover();

    if(e != false){
        removeJane('jane');
        alert_confrm('Operação realizada com sucesso!');
    }else{
        alert_confrm('Falha em realizar a operação! Tente novamente mais tarde');
    }
    
}

/******************************************************************************/
// scroll 'like facebook'

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if(document.getElementById("fac-like") != null){
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("fac-like").style.top = "15%";
      } else {
        document.getElementById("fac-like").style.top = "-100px";
      }
  }
  prevScrollpos = currentScrollPos;
} 

/*****************************************************************************/
// placeholder="DDD + Celular"  maxlength="14" onkeypress="mascara_tel(this)" required
    function mascara_tel(telefone){    
		if(telefone.value.length == 0){
            telefone.value = '(' + telefone.value; 
		}
        if(telefone.value.length == 3){
            telefone.value = telefone.value + ')';
        }
        if(telefone.value.length == 9){
            telefone.value = telefone.value + '-'; 
        }
    }


//code api push
/*
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-analytics.js"></script>
*/
  var firebaseConfig = {
    apiKey: "AIzaSyBzSBrrDdAI5s2f5ULlPN5dRnleIPc8JPo",
    authDomain: "hafleuki-be9e9.firebaseapp.com",
    databaseURL: "https://hafleuki-be9e9.firebaseio.com",
    projectId: "hafleuki-be9e9",
    storageBucket: "hafleuki-be9e9.appspot.com",
    messagingSenderId: "596941009620",
    appId: "1:596941009620:web:2932ca761a002d51914141",
    measurementId: "G-TP246YKDT2"
  };
  // Initialize Firebase
 // firebase.initializeApp(firebaseConfig);
  //firebase.analytics();


var isPushEnabled = false;
/*
window.addEventListener('load', function() {
  var pushButton = document.querySelector('.js-push-button');
  pushButton.addEventListener('click', function() {
    if (isPushEnabled) {
      unsubscribe();
    } else {
      subscribe();
    }
  });

  // Check that service workers are supported, if so, progressively
  // enhance and add push messaging support, otherwise continue without it.
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register(genesis+'/sw_push.js')
    .then(initialiseState);
  } else {
    console.warn('Service workers aren\'t supported in this browser.');
  }
});
*/
// Once the service worker is registered set the initial state
function initialiseState() {
  // Are Notifications supported in the service worker?
  if (!('showNotification' in ServiceWorkerRegistration.prototype)) {
    console.warn('Notifications aren\'t supported.');
    return;
  }

  // Check the current Notification permission.
  // If its denied, it's a permanent block until the
  // user changes the permission
  if (Notification.permission === 'denied') {
    console.warn('The user has blocked notifications.');
    return;
  }

  // Check if push messaging is supported
  if (!('PushManager' in window)) {
    console.warn('Push messaging isn\'t supported.');
    return;
  }

  // We need the service worker registration to check for a subscription
  navigator.serviceWorker.ready.then(function(serviceWorkerRegistration) {
    // Do we already have a push message subscription?
    serviceWorkerRegistration.pushManager.getSubscription()
      .then(function(subscription) {
        // Enable any UI which subscribes / unsubscribes from
        // push messages.
        var pushButton = document.querySelector('.js-push-button');
        pushButton.disabled = false;

        if (!subscription) {
          // We aren't subscribed to push, so set UI
          // to allow the user to enable push
          return;
        }
        
        
        // Keep your server in sync with the latest subscriptionId
        //sendSubscriptionToServer(subscription);
//console.log(subscription.endpoint);
        // Set your UI to show they have subscribed for
        // push messages
        pushButton.textContent = 'Disable Push Messages';
        isPushEnabled = true;
      })
      .catch(function(err) {
        console.warn('Error during getSubscription()', err);
      });
  });
}
setTimeout(function(){(function(){  
$('#vers').append('<div> PRIME</div>');
}())},500);

function subscribe() {
  // Disable the button so it can't be changed while
  // we process the permission request
  var pushButton = document.querySelector('.js-push-button');
  pushButton.disabled = true;

  navigator.serviceWorker.ready.then(function(serviceWorkerRegistration) {
    serviceWorkerRegistration.pushManager.subscribe()
      .then(function(subscription) {
        // The subscription was successful
        isPushEnabled = true;
        pushButton.textContent = 'Disable Push Messages';
        pushButton.disabled = false;

        // TODO: Send the subscription.endpoint to your server
        // and save it to send a push message at a later date
        
        console.log(subscription.endpoint);
        //return sendSubscriptionToServer(subscription);

      })
      .catch(function(e) {
        if (Notification.permission === 'denied') {
          // The user denied the notification permission which
          // means we failed to subscribe and the user will need
          // to manually change the notification permission to
          // subscribe to push messages
          console.warn('Permission for Notifications was denied');
          pushButton.disabled = true;
        } else {
          // A problem occurred with the subscription; common reasons
          // include network errors, and lacking gcm_sender_id and/or
          // gcm_user_visible_only in the manifest.
          console.error('Unable to subscribe to push.', e);
          pushButton.disabled = false;
          pushButton.textContent = 'Enable Push Messages';
        }
      });
  });
}










/******************************************************************************/



//notifcs basic
function notifyMe(titulo,corpo) {
  if (!("Notification" in window)) {
    alert("Este browser não suporta notificações de Desktop");
  }
  else if (Notification.permission === "granted") {
      try {
        spawnNotification(titulo,corpo);
    } catch (e) {
        if (e.name == 'TypeError'){
            navigator.serviceWorker.getRegistrations().then(function(registrations) {
              registrations[0].spawnNotification(titulo,corpo);
            });
        }
    }
  }
  else if (Notification.permission !== 'denied') {
    Notification.requestPermission(function (permission) {
      if (permission === "granted") {
            try {
            spawnNotification(titulo,corpo);
        } catch (e) {
            if (e.name == 'TypeError'){
                navigator.serviceWorker.getRegistrations().then(function(registrations) {
                  registrations[0].spawnNotification(titulo,corpo);
                });
            }
        }   
      }
    });
  }

}

function spawnNotification(titulo,corpo) {
  var opcoes = {
      body: corpo,
      icon: genesis+'/assets/imagens/logo/logo.png'
  }
  var n = new Notification(titulo,opcoes);
}


/******************************************************************************/

// api youtube
//

var player;
//onYouTubeIframeAPIReady 
//'onReady': onPlayerReady

function modYoutb(id,id_div) {
    
        player = new YT.Player(id_div, {
         height: '100%',
         width: '100%',
         position:'relative:',
         bottom:'0',
         videoId:id,
         events: { 
            
      }
    });
}

function onPlayerReady(event) {
    event.target.playVideo();
}

//'onStateChange': onPlayerStateChange
        var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }


/********************************************************************************/

function estr_posts(){
 /* var w = new Worker(genesis+'/assets/js/modulo_get.js');
  w.postMessage({'ctr':'home/getEstrutura','indice':'estrutura','extrair':'false'});
  w.onmessage = function(obj){*/
  
    var obj = {"estrutura":[{"qnt":"2","tag":"div","class":["gaf-3","gaf-s-6"],"tipo":"artg","id_pai":"theLast"},{"qnt":"1","tag":"div","class":["gaf-6","gaf-s-6"],"tipo":"prop","id_pai":"theLast"},{"qnt":"1","tag":"div","class":["gaf-12","gaf-s-6"],"tipo":"video","id_pai":"theLast"}]};
    var arr = obj.estrutura;

    var str = arr[0][2];//String();
    var obj_footer = str;//JSON.parse()

    var arr_length = arr.length;

   /* for(var x=0;x < arr_length;x++){
        var cara = arr[x];

        var divAtual = document.getElementById(cara.id_pai);
        var divNova = document.createElement(cara.id);
        
        for(var y=0; y < cara.class.length;y++){  
            divNova.classList.add(cara.class[y]);
        }
        
       divNova.id= cara.id;
      
      var conteudoNovo = document.createTextNode("Olá, cumprimentos!"); 
      
      divNova.appendChild(conteudoNovo); 
      
      divAtual.appendChild(divNova);
  
    //}
  }*/
};

/******************************************************************************/
//head('https://www.youtube.com/iframe_api');

function getPosts(iniP,iniPp,iniV,categ=0,canon = false,carss=false,nvl=1){
    var workerGetPosts = new Worker(genesis+'/assets/js/modulo_post.js');
    var url = window.location;
    var splurl = url.toString().split('/');
    refView = splurl[splurl.length - 1];
    head('https://www.youtube.com/iframe_api');
    arr=[];
    if(carss === true){
            //{"qnt":"1","tag":"div","class":"gaf-12","arr":"videos","tipo":"video","id_pai":"videos"},
          estr = {"estrutura":[
              {"qnt":"2","tag":"div","class":"gaf-6 gaf-s-6 ","arr":"posts","tipo":"artg","id_pai":"artigos"},
              {"qnt":"2","tag":"div","class":"gaf-6 gaf-s-6","arr":"posts","tipo":"artg","id_pai":"artigos"},
              {"qnt":"2","tag":"div","class":"gaf-6 gaf-s-6 ","arr":"posts","tipo":"artg","id_pai":"artigos"},
              {"qnt":"2","tag":"div","class":"gaf-6 gaf-s-6 ","arr":"posts","tipo":"artg","id_pai":"artigos"},
              ]};
              
        }
    if(carss === false){
            estr = {"estrutura":[{"qnt":"2","tag":"div","class":"gaf-6 gaf-s-6","arr":"posts","tipo":"artg","id_pai":"artigos"}
            ,{"qnt":"2","tag":"div","class":"gaf-3 gaf-s-6","arr":"posts","tipo":"artg","id_pai":"artigos"}
            ,{"qnt":"1","tag":"div","class":"gaf-6 gaf-s-6","arr":"posts","tipo":"artg","id_pai":"artigos"}
            ,{"qnt":"1","tag":"div","class":"gaf-12 gaf-s-6","arr":"videos","tipo":"video","id_pai":"artigos"}
            ,{"qnt":"4","tag":"div","class":"gaf-3 gaf-s-6","arr":"posts","tipo":"artg","id_pai":"artigos"}
            ,{"qnt":"2","tag":"div","class":"gaf-6 gaf-s-6","arr":"posts","tipo":"artg","id_pai":"artigos"}
            ,{"qnt":"1","tag":"div","class":"gaf-12 gaf-s-6","arr":"videos","tipo":"video","id_pai":"artigos"}
            ,{"qnt":"2","tag":"div","class":"gaf-6 gaf-s-6","arr":"posts","tipo":"artg","id_pai":"artigos"}
            ,{"qnt":"4","tag":"div","class":"gaf-3 gaf-s-6","arr":"posts","tipo":"artg","id_pai":"artigos"}]};
        }
    
    //sessionStorage.removeItem('posts');
    prntGhost(canon,carss,nvl);
    
    arr_estr = estr.estrutura;
    prx='';
    totArtgs = 0;
    totArtgs2=0;
    
    posts = document.getElementsByClassName('artg').length;
    videos = document.getElementsByClassName('video').length;
    props = document.getElementsByClassName('propg').length;
    varAnotcs = '';
    if(nvl == 2){
        varAnotcs = 2;
    }
    
    for(str=0;str < arr_estr.length;str++){
            qnt_post = arr_estr[str].qnt;
            array = arr_estr[str].arr;
            var tipo = arr_estr[str].tipo;
            classe = arr_estr[str].class;
            ini = 0;
            vale='';
            
            
            for(t=0;t < qnt_post;t++){
                totArtgs2++;
                if(array == 'posts'){
                    vale = posts;
                    ini = iniP;
                }else if(array == 'videos'){
                    vale = videos;
                    ini = iniV;
                }else if(array == 'props'){
                    vale = props;
                    ini = iniPp;
                }
                if(document.getElementsByClassName(tipo).length == vale){
                    co = 0;
                }else{
                    co = document.getElementsByClassName(tipo).length;
                }

                if(canon === true){
                    setTimeout(function(){
                        workerGetPosts.postMessage({'ctr':'artigos/getPosts','indice':'posts','extrair':false,'post':'ini='+ini+'&type='+array+'&limit=1&categ='+categ+'&canon=true&nvl='+nvl});
                    },1000);
                }else{
                    workerGetPosts.postMessage({'ctr':'artigos/getPosts','indice':'posts','extrair':false,'post':'ini='+ini+'&type='+array+'&limit=1&categ='+categ+'&canon=false&nvl='+nvl});
                }
                
                workerGetPosts.onmessage = function(el){
                    arr = el.data;totArtgs++;
                    if(arr !== false){
                        var array_atual = arr.retn;
                        
                        if(array_atual != undefined && array_atual[0] != undefined){
                            printposts(canon,carss,array_atual[0],co);
                            co ++;
                        }
                    }
                    
                    if(totArtgs2 == totArtgs){
                        for(var tt=co;tt < totArtgs;tt++){
                            if(document.getElementsByClassName("shdw"+tt+varAnotcs) !== 'undefined'){
                                $(".shdw"+tt+varAnotcs).remove();
                            }
                        }
                    }
                }
                
                if(array == 'posts'){
                    iniP ++;
                }else if(array == 'videos'){
                    iniV ++;
                }else if(array == 'props'){
                    iniPp ++;
                }
            }
            
        }
    
    function prntGhost(canon,carss,nvl){
        arr_estr = estr.estrutura;
        clsShdw='';
        arrCook=[]; co2 = 0;
        varAnotacs = '';
        
        if(nvl == 2){
            varAnotacs = 2;
        }
            
        for(var str=0;str < arr_estr.length;str++){
            var qnt_post = arr_estr[str].qnt;
            var array = arr_estr[str].arr;
            var tipo = arr_estr[str].tipo;
            var classe = arr_estr[str].class;
            var id_pai = arr_estr[str].id_pai;
            
            if(sessionStorage.getItem("posts") != null && nvl == 0){
                arrCook = JSON.parse(sessionStorage.getItem("posts"));
            }
            classe2 = tipo+'_shdw';
            
            if(carss == true){
                classe += ' mySlides';
            }
            
            for(var t=0;t < qnt_post;t++){
                clsShdw = 'shdw'+co2+varAnotacs;
                
                if(document.getElementById(clsShdw) == null){
                        $('#'+id_pai+varAnotacs).append('<div class="'+classe2+' '+clsShdw+'"><div class="'+classe+' " id="bxghst'+co2+varAnotacs+'" style="margin-top:0.5%;margin-bottom:0.5%;"><div class="gaf-12"><div class="apost bs2" style="position: relative;margin:1%;margin-left:0px;margin-top:0px;margin-bottom:0px;background:#fff; overflow: hidden;"><div class=" post "><div class="img_box " id="shdw'+co2+varAnotacs+'"></div></div></div></div></div></div>');
                        ghost(clsShdw);
                }
                co2 ++;
            }
        }
    }

    function printposts(canon,carss,arrAt,co3){
        var arrCook=[];

        if(co3 <= 5){
            arrCook.push(arrAt);
        }else if(co3 == 6){
            sessionStorage.setItem("posts",arrCook);
        }
        
        var img = arrAt.img;
        var titulo = arrAt.titulo;
        var datas = arrAt.data;
        var alt = arrAt.alt;
        var categ = arrAt.categ;
        var url = arrAt.url;
        var id = arrAt.id;
        var bg1 = arrAt.bgcolor1;
        var w  = arrAt.width;
        var h = arrAt.height;
        var type = arrAt.tipo;
        var tipo = '';
        varAnotacs = '';
        
        if(nvl == 2){
            varAnotacs = 2;
        }
        
        if(type == 'artigo'){
		   tipo = 'artg';
		}else if(type == 'video'){
		   tipo = 'video';
		}else if(type == 'propaganda'){
		   tipo = 'propg';
		}
		
        var rota = genesis+'/assets/imagens/img_blog/'+img;
        
        if(img.includes('data:image') == true){
            rota = img;
        }

        //var r = w / h;
       /* if(r == 1 && arr_class[0] != 'gaf-3' && tipo != 'video'){
            classe = 'gaf-3 gaf-s-6';
            prx = true;
        }*/
        
        /*if(tipo == 'artg' && arr_class[0] == 'gaf-3' && arrAt[co+1] == undefined && t >= 2){
            classe = 'gaf-6 gaf-s-6';
        }*/
            
            if(tipo == 'propg'){
                $('#bxghst'+co3+varAnotacs).html('<div class=" propg" id="'+id+'"><div class="gaf-12"><div style="margin:1%;overflow: hidden;"><div class=" prop "><div class="img_box "><a href="'+url+'" target="_blank"><img src="'+rota+'" style="width:100%;"></a></div></div></div></div></div>');
            }else if(tipo == 'video'){
                $('#bxghst'+co3+varAnotacs).html('<div class=" video"><div class="gaf-12"><div class="" style="position:relative;background:#fff; overflow: hidden;"><div class="capaVd" onclick="modl_vd(\'' + encodeURIComponent(url) + '\','+id+')"></div><div style="width:100%;height:300px;" id="player'+id+'"></div></div></div></div><div id="mdVd'+id+'"></div>');
                //$('#bxghst'+co3+varAnotacs).html('<div class="video"><div class="gaf-12"><div style="position:relative;margin:1%; overflow: hidden;"><div class="capaVd" onclick="modl_vd(\'' + encodeURIComponent(url) + '\','+id+')"><div style="width:100%;height:300px;" id="player'+id+'"></div></div></div></div><div id="mdVd'+id+'"></div>');
                if(typeof document.getElementsByClassName("shdw"+co3+varAnotacs)[0] != 'undefined'){
                    document.getElementsByClassName("shdw"+co3+varAnotacs)[0].classList.remove("shdw"+co3+varAnotacs);
                }
                setTimeout(function(){modYoutb(url,'player'+id);},500);
            }else if(tipo == 'artg'){
                if(document.getElementById('p'+id+varAnotacs) == null){
                    $('#bxghst'+co3+varAnotacs).html('<div class=" artg" id="p'+id+varAnotacs+'" style="margin-top:0.5%;margin-bottom:0.5%;" onclick="coverh();"><div class="gaf-12" title="'+titulo+'"><a href="'+genesis+'/artigos/ler/'+id+'"><div class="apost bs1" style="position: relative;margin:1%;margin-left:0px;margin-top:0px;margin-bottom:0px;background:#fff; overflow: hidden;"><div class="content shadow">  '+titulo+'</div><div class=" post "><div class="img_box "><div style="background:'+bg1+'"><img src="'+rota+'" alt="" style="width:'+w+'px;height:'+h+'px;"></div></div></div></div></a></div></div>');
                }
            }
            if(typeof document.getElementsByClassName("shdw"+co3+varAnotacs)[0] != 'undefined'){
                document.getElementsByClassName("shdw"+co3+varAnotacs)[0].classList.remove("shdw"+co3+varAnotacs);
            }

        if(carss === true){
            showSlidesGalery(2,'mySlides',2);
            showSlidesGalery(1,'SlidesVideo',1);
        }
        removecover();
    }
}
    
/******Div fantasma Onload ************************************************************************/

function ghost(el){
    var jane = document.createElement("DIV");
    var vd = document.createElement("VIDEO")
    var kk = document.createElement("SOURCE")
    
    var cref =document.getElementById(el);
    if(cref != null){
    cref.appendChild(jane);
    
    
    vd.setAttribute("autoload",'');
    vd.style.width = '100%';
    jane.appendChild(vd);
    
    kk.type = 'video/mp4';
    kk.setAttribute("src",genesis+"/assets/imagens/gifs/ghost.mov");
    vd.appendChild(kk);
    }
}

/******************************************************************************/



/******************************************************************************/
 var tjanorig = window.innerWidth
window.onresize =function (){
  var tjan = window.innerWidth
    
console.log('largura da janela',tjan)
//console.log('largura do cliente',document.documentElement.clientWidth)
if(tjanorig < 800 && tjan > 800){
    closeNav()
    tjanorig = window.innerWidth;
    $(".item_m").html('');
    $(".boxmenu").html('');
    menu(tjan)
    console.log("%c sou pequinininho",'background:yellow;')
}else if(tjanorig > 800 && tjan < 800){
    tjanorig = window.innerWidth;
    $(".item_m").html('');
    $(".boxmenu").html('');
    menu(tjan);
     console.log("%c sou grandinho",'background:green;')   
}
}

function menu(tjan){  
    var req = new Worker(genesis+'/assets/js/modulo_get.js');
    req.postMessage({'ctr':'home/getMenu'});
    req.onmessage = function(e){
        $(".item_m").html('');
        $(".boxmenu").html('');
        
        $(".boxmenu").append('<div class="gaf-12 menu row item_m " style="position: relative;z-index:10;"></div><div class="gaf-12" style="background-image: -moz-linear-gradient(top,#f49494 10%,#ca3a3a 55%,#822727 85%);min-height:15px;"></div>');
        $(".item_m").append('<div class="gaf-12 menulist"></div>');
    
        var arr_m = e.data.menu;
        var arr_c = e.data.categoria; 
        var arr_subc = e.data.subcategoria;
        //var arr_lastp = e.data.ult_post_cat;
        // arr_destaque = e.data.dstq_menu;
        var nome1 ='';
        var nome2 ='';
        var id_blk = '';
        for(var m=0;m < arr_m.length;m++){ 
            var link ="" ;var link2 ="" ; url_m = genesis+'/'+arr_m[m].url; var oklc ="" ;
           if(arr_m[m].url == "#"){ 
               id_blk="box_" +arr_m[m].id; 
               nome1 = arr_m[m].nome;
           }else if(arr_m[m].id == 1){ 
               nome1='<img src="'+genesis+'/assets/imagens/logo/logo.png" style="height: 57px;margin-top: 10px;border-radius: 11px;border:1px solid black;">';
            }else{
                nome1 = arr_m[m].nome;
            }
            if(tjan <= 800){
              if(arr_m[m].url == '#'){
                oklc = 'onclick="btn_show(\''+'cdml_'+arr_m[m].id+'\')"';
              }
            }
            link = '<div class="fl dva_m"><a class="a_m" '+oklc+'="" href="'+url_m+'">'+nome1+'</a></div>';
            link2 = '<a href="'+url_m+'" '+oklc+'="">'+arr_m[m].nome+'</a>';
            
            if(!arr_m[m].url && arr_m[m].onclick != ''){
                var id_blk = 'box_'+arr_m[m].id;
                link = '<a class="a_m btnEvCatg_'+arr_m[m].id+'" style="cursor:pointer;">'+nome1+'</a>';
                link2 = '<a class="btnEvCatg_'+arr_m[m].id+'" style="cursor:pointer;">'+nome1+'</a>';
                
            }else{
                var id_blk = arr_m[m].id;
            }
            //<a class="a_m" href="'+url_m+'">'+nome1+'</a>    <a href="'+url_m+'">'+arr_m[m].nome+'</a>
            $(".menulist").append('<div class="abra abr_'+arr_m[m].id+'">'+link+'<div class="gaf-12 app_menu"><div class="fl app_img"><img src="'+genesis+'/assets/imagens/icones/'+arr_m[m].img+'" style="width:100%;"></div><div class="fl appm_a">'+link2+'</div></div></div>');

           if ( tjan <= 800){
               $(".abr_"+arr_m[m].id).append('<div class="gaf-12" id="cdml_'+arr_m[m].id+'" style="display:none;"><div class="cdml '+id_blk+'"><div class="row"><div class="lista m_'+arr_m[m].id+'"></div></div></div></div>');
            }else{
                $(".abr_"+arr_m[m].id).append('<div class="menulist-content '+id_blk+'" style="position: absolute;overflow-y: auto;max-height: 600px;z-index: 999999999;"><div class="row"><div class="lista m_'+arr_m[m].id+'"></div></div></div>');
            }
            for(var c=0;c < arr_c.length;c++){ 
                if(arr_c[c].id_pai == arr_m[m].id){
                    var url_c="";
                    if(!arr_c[c].url){
                        url_c = '#';
                    }else{
                        url_c = genesis+'/'+arr_c[c].url;
                    }
                    f_dstq=""; gaf="gaf-3"; p_img="/menu"; 
                    $(".m_"+arr_c[c].id_pai).append('<div class="submenulist '+gaf+' gaf-3 gaf-s-4 sbox_'+arr_c[c].id+'"></div>');
                    
                    $(".sbox_"+arr_c[c].id).append('<div class="gaf-13 gaf-s-13 submenulist_box ctg'+arr_c[c].id+'" style="min-width:180px;"></div>');
                    $(".ctg"+arr_c[c].id).append('<div class="gaf-12 categoria" style="background: #000;"><a href="'+url_c+'">'+arr_c[c].nome+'</a></div>');
                   
                    $(".ctg"+arr_c[c].id).append('<div class="gaf-12 row" style="bottom: 0;position: relative;padding: 1%;"><div style="position:relative;"><img style="height: 100%;width:100%;" src="'+genesis+'/assets/imagens'+p_img+'/'+arr_c[c].img+'"></div></div>');
                }
            }
            
			var elEv2 = document.getElementsByClassName("btnEvCatg_"+arr_m[m].id);

			for (var i = 0; i < elEv2.length; i++) {
                elEv2[i].addEventListener('click', login, false);
            }
            
        }
        
    }
    
}


/******************************************************************************/
var slideIndex = 0;


function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("numbertext");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if(slideIndex > slides.length) {
      slideIndex = 1;
  }    
  
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 8000); 
}

/******************************************************************************/
//var slideIndexGalery = 2;
var x =1;
function plusSlides(n,id,slideIndexGalery) {
    let ot = slideIndexGalery;
  showSlidesGalery(ot += n,id,slideIndexGalery);
}

function currentSlide(n,id,slideIndexGalery) {
    let ot = slideIndexGalery;
  showSlidesGalery(ot += n,id,slideIndexGalery);
}

function showSlidesGalery(n,id,slideIndexGalery) {
  var i; 
  var slides = document.getElementsByClassName(id);
  if(slides.length > 0){
      if (n > slides.length) {n = slideIndexGalery; x=1;}    
      
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      
      for(x;x <= n;x++){
          slides[slides.length-x].style.display = "block";  
      }
      
      x = n+1;
      
      setTimeout(function(){plusSlides(n,id,slideIndexGalery)}, 10000);
  }
}


/******************************************************************************/
function getDestaques(inicio,limit){
    var workerGetDest = new Worker(genesis+'/assets/js/modulo_post.js');
    var url = window.location;
    var splurl = url.toString().split('/');
    refView = splurl[splurl.length - 1];

    if(inicio == 'mais'){
        var nItens = document.getElementsByClassName('post_left');
        inicio = nItens.length;
    }
    
    arr=[];
    //sessionStorage.removeItem("destq")
    
    if(sessionStorage.getItem("destq") != null){
        arr = JSON.parse(sessionStorage.getItem("destq"));
        printDest(arr);
    }else{
        workerGetDest.postMessage({'ctr':'artigos/getDestaques','extrair':false,'indice':'posts','post':'inicio='+inicio+'&limit='+limit});
    }
    
    workerGetDest.onmessage = function(obj){
        arr = obj.data;
        sessionStorage.setItem("destq", JSON.stringify(arr));
        printDest(arr);
    }
    

    var url = window.location.search.substr(1);
    var split_url = url.split("=");
    var categ = 0;

    if(split_url.length > 1 && split_url[0] == 'c' || split_url[0] == 'p'){
        if(split_url[0] == 'c'){
            categ = split_url[1];
        }else if(split_url[0] == 'p'){
            categ = 7;
        }
        getPosts(0,0,0,categ,true);
    }else{
        getPosts(0,0,0,categ,false,false);
    }
    
    
    getMoreRead();
   
   function printDest(arr){
        if(document.getElementById("destqs_tit") == null){
            $('#post_left').append('<div class="gaf-12 reader_left" id="destqs_tit" style="text-align:center;">DESTAQUES</div>');
        }
    
        for(var p=0;p < arr.posts.length;p++){
                var id = arr.posts[p].id;
                var img = arr.posts[p].img;
                var titulo = arr.posts[p].titulo;
                var alt = arr.posts[p].alt;
                var resumol = arr.posts[p].resumo;
                var tipo = arr.posts[p].tipo;
                var url = arr.posts[p].url;
                var rota = genesis+'/assets/imagens/img_blog/'+img;
                
                if(img.includes('data:image') === true){
                    rota = img;
                }
                if(refView != id){
                    if(tipo == 'artigo'){
                        $('#post_dest').append('<div class="t mySlides gafnm-6 fade"><div class="" style="padding:0;"><div class="numbertext"></div><a href="'+genesis+'/artigos/ler/'+id+'"><div class="" style=""><img src="'+rota+'" alt="'+alt+'" style="width:100%;height:100%"></div><div class="text_destq2"><p>'+resumol+'</p></div></a></div></div>');
                    }
                    //lateral
                    if(tipo == 'artigo'){
                        $('#post_left').append('<div class="post_left" title="'+resumol+'"><a href="'+genesis+'/artigos/ler/'+id+'"><img src="'+rota+'" alt="'+alt+'" style="width:100%;height:100%"><div class="contentl">  '+resumol+' </div></a></div>');
                    }
                }
            }
            
        //$('#post_dest').append('<a class="prev" onclick="plusSlides(-1)">❮</a>');
        //$('#post_dest').append('<a class="next" onclick="plusSlides(1)">❯</a>');
            
        var slideIndexGalery = 4;
        showSlidesGalery(slideIndexGalery,'mySlides');
   }
}

/******************************************************************************/
//sessionStorage.removeItem(r)


// r => id de print; c => classe para passar slides; n => numero de slides block por vez; t +. tabela para requisição do conteudo; w => condiçôes para requisição do conteúdo;
function carrossel(r,c,n,t,w,x=0){
    var fp = [{}];
    fp[0][t] = ['*',w,''];
    model('get','opGet','p',fp,'',(e)=>{
        if(e != false){
            printC(e);
        }else{
            //console.log('nao foi');
        }
    });
    
   function printC(a){
        a.forEach((i)=>{
            var id = i.id;
            var img = i.img;
            var titulo = i.titulo;
            var url = i.url;
            var tipo = i.tipo;
            var alt = i.alt;
            var rota = genesis+'/assets/imagens/carrossel_img/'+img;
            var href = '#';//genesis+'/artigos/ler/'+id;
            var a  = '';
            var a2 = '';
            var c2 = '';
            
            if(titulo != ''){
                c2 = 'text_destq2';
            }
            
            if(url != ''){
                href = url;
                a = '<a href="'+href+'" target="_blank">';
                a2 = '</a>';
            }
            if(img.includes('data:image') === true){
                rota = img;
            }
            
            $('#'+r).append('<div class="t '+c+' fade"><div class="" style="padding:0;"><div class="numbertext"></div>'+a+'<div class="" style=""><img class="imgcarr_'+r+'" src="'+rota+'" alt="'+alt+'" style="width:100%;height:100%;"></div><div class="'+c2+'"><p>'+titulo+'</p></div>'+a2+'</div></div>');
            
        });
        
        //$('#'+r).append('<a class="prev" onclick="plusSlides(-1)">❮</a>');
        //$('#'+r).append('<a class="next" onclick="plusSlides(1)">❯</a>');
        
        if(x == 1){
            showSlidesGalery(n,c,n);
        }
   }
}

//[{'tipo':tipo,'id_ordem':no,'id_pai':id_pai},{'id_ordem':'ASC'},'LIMIT 1']

let f = [{'tipo':'divulgacao'},{'id':'ASC'},'LIMIT 10'];
carrossel('artigos','mySlides gafnm-12',1,'blog',f,1);

/******************************************************************************/



/******************************************************************************/

function modl_vd(url,el){
    $("#mdVd"+el).append('<div id="modal_vd'+el+'" class="gaf-12 modal-vd myModal_vd"><div class="z-6"><div class="gaf-12 modal-content-vd" id="vd'+el+'">');
    $("#vd"+el).append('<div class="gaf-12"><div class="gaf-12 modal-header-vd"><div class="gafnm-9"></div><div class="gafnm-3 box_close"><span onclick="closeBtnVd('+el+');" class="closeCaixaVd">×</span></div></div></div>');
    $("#vd"+el).append('<div class="gaf-12"><div class="modal-body-vd" style="height: 500px;"><div id="body_v'+el+'"></div></div>');
    $("#vd"+el).append('<div class="gaf-12"><div class="modal-footer-vd"><div id="notifica"><div id="print_sucss"></div></div></div></div>');
    $("#vd"+el).append('</div></div></div>');
    modYoutb(url,'body_v'+el);
    document.getElementById('body_v'+el).style.height = '100%';
}

/******************************************************************************/

function closeBtnVd(el){
    //document.getElementById("modal_vd"+el).style.display = 'none';
    $("#modal_vd"+el).remove();
}

//pesquisa no blog:
function filtrar_post(filtrar = ''){
    var workerProds = new Worker(genesis+'/assets/js/modulo_post.js');
    
    var filtro = '';
     if(filtrar == 'yes'){
        filtro = document.getElementById('filtrar_post').value;
        workerProds.postMessage({'ctr':'artigos/filtrar','indice':'artigos','post':'filtro='+filtro,'extrair':true});
    }
    $('#theLast').html(' ');
    $('#search').html(' ');
    
    workerProds.onmessage = function(obj){
        var arr = obj.data;
        if(arr != 'false'){
                if(arr.tipo == 'propaganda'){
                    $('#search').append('<div class="gaf-12"><div class="gaf-11"><div style="width:100%;height:100%"><img src="'+genesis+'/assets/imagens/img_blog/'+arr.img+'" alt="'+arr.alt+'"></div></div></div>');
               }else if(arr.tipo == 'video'){
                  $('#theLast').append('<div class="gaf-12"><div class="gaf-11"><div class="gaf-12"><div style="margin:1%;background:#fff; overflow: hidden;"><div style="width:100%;height:350px;" id="player'+arr.id+'"></div></div></div></div></div>');
                   modYoutb(arr.url,'player'+arr.id);
               }else{
                    $('#search').append('<div class="gaf-12 a"><div class="gaf-11"><div class="gaf-12 box_search"><div class="gaf-4"><a href="'+genesis+'/artigos/ler/'+arr.id+'"><img src="'+genesis+'/assets/imagens/img_blog/'+arr.img+'" alt="'+arr.alt+'" style="width:100%;height:100%;border-radius: 20px;"></a></div><div class="gaf-8" style="padding: 10px;"><div class="c_search"><a href="'+genesis+'/artigos/ler/'+arr.id+'"><span style="font-size:16px;">'+arr.titulo+'</span> <div class="rs_search"> <span style="color:#666;">'+arr.resumo+' </span></div><span class="fr time" style="padding-top: 5%;">'+arr.dataFormat+'</span></a></div></div></div></div></div>');
               }
        }else{
             $('#search').append('<div style="color:#ffa500;font-weight: bold;margin: 5px;">Nenhum artigo encontrado sobre '+filtro+'</div>');
        }
    }
}

/******************************************************************************/

// get Mais Visitados
function getMoreRead(){
    var w = new Worker(genesis+"/assets/js/modulo_get.js");
    w.postMessage({'ctr':'artigos/getMoreRead','extrair':true,'indice':'read'});
    
    w.onmessage = function(e){
        var data = e.data.read;
        if(document.getElementById("mais_vistos") == null){
             $("#post_left2").append('<div class="gaf-12 reader_left" id="mais_vistos">MAIS LIDOS</div>');
        }
        data.forEach((i)=>{
            if(i.titulo.length > 0){
                $("#post_left2").append('<div class="gaf-12 read_more"><div class="fl"><img src="'+genesis+'/assets/imagens/icones/gonext_103393.png" height="15px"></div><div class="read_titu"><a href="'+genesis+'/artigos/ler/'+i.id+'">'+i.titulo+'</a></div></div>');
            
            }
        });
    }
}

/******************************************************************************/

//accpet cookies
//sessionStorage.removeItem("accepted_cookies")

function accept_politc(){
    if(sessionStorage.getItem("accepted_cookies")){
        $("#print_politc").remove();
    }else{
        $("#print_politc").append('<div id="box_politc" class="gaf-12 a"><div class="gaf-12" style="cursor: pointer;"><img src="'+genesis+'/assets/imagens/default_img/cancel-mark-white.svg" style="float:right;" onclick="recused_pol();" width="15px" height="15px"></div><div class="z-9"><div class="gaf-12"><div class="gaf-9" style="font-family: initial;">Utilizamos cookies para fornecer uma melhor experiência para nossos usuários. Para saber mais sobre o uso de cookies,consulte nossa <a href="'+genesis+'/politicaprivacidade">política de privacidade</a>. Ao continuar navegando em nosso site, você concorda com a nossa política.</div><div class="gaf-3" style="margin-top: 1%;"><div class="gaf-12"><div class="gaf-12"><div id="btn_politc" onclick="accepted_pol();">Aceitar</div></div></div></div></div></div></div>');
    }
    
}

setTimeout(accept_politc,900);

function accepted_pol(){
    sessionStorage.setItem("accepted_cookies", "sim");
    $("#print_politc").remove();
}

function recused_pol(){
    $("#print_politc").remove();
}

/******************************************************************************/


//pwa

if (navigator.serviceWorker) {
    navigator.serviceWorker.register("/genesis/sw.js", {
      scope: "/genesis/"
    }).then(function (reg) {
     // console.log("SW register success", reg);
    }, function (err) {
     //console.log("SW register fail", err);
    });
  }else{
    // console.log('navegador nao suporta SW');
  }
 
 

setTimeout(function(){
        var deferredPrompt;
        
        window.addEventListener('beforeinstallprompt', (e) => {
            // Prevent Chrome 67 and earlier from automatically showing the prompt
            e.preventDefault();
            // Stash the event so it can be triggered later.
            deferredPrompt = e;
            // Update UI to notify the user they can add to home screen
            
            wpp();
            if(document.getElementById("downapp") != null){
                document.getElementById("downapp").style.display = 'block';
            }
            
            var a = document.querySelectorAll('.add-button');
            var addBtn = Array.prototype.slice.call(a);
            
            addBtn.forEach(function(i){
                i.addEventListener('click', (e) => {
                    // hide our user interface that shows our A2HS button
                    // Show the prompt
                    deferredPrompt.prompt();
                    // Wait for the user to respond to the prompt
                    deferredPrompt.userChoice.then((choiceResult) => {
                        if (choiceResult.outcome === 'accepted') {
                         // console.log('User accepted the A2HS prompt');
                        } else {
                          //console.log('User dismissed the A2HS prompt');
                        }
                        deferredPrompt = null;
                      });
                });
            });
            
        });
},1000);




/******************************************************************************/

document.onreadystatechange = function () {
    nivelus = sessionStorage.getItem('nivel');
    console.log(document.readyState);
    
        
  if(document.readyState === 'loading' || document.readyState === 'interactive'){
      document.getElementById("gif_block").style.display = 'block';
      
        //getDestaques(0,5);
        
        if(sessionStorage.getItem("nivel") == 2){
            document.getElementById("categ_pg").style.display = 'block';
            //getHomeUser();
        }

  }
  else if (document.readyState === 'complete') {

    document.getElementById("gif_block").style.display = 'none';
    addAtual('evento','atual');
  }
}

function addAtual(id,c){
    setTimeout(function(){
        var btns = document.getElementsByClassName(id);

        for(var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName(id);
            
            for(var a=0; a < current.length;a ++){
                current[a].className = current[a].className.replace(" "+c, "");
            }
            
            this.className += " "+c;
            
          });
        } 
    },1000);
}



/***********************jane***************************************************/
function jane(el,al,idf=0) {
  
    var  jane = document.createElement("DIV");
    var z= document.createElement("DIV")
    var jane_content = document.createElement("DIV")
    var content = document.createElement("DIV");
    var span = document.createElement("DIV")
    var logo = document.createElement("IMG")
    var cform = document.createElement("DIV");
    
        jane.style.display ="block";
     if(el == 0){
         jane.classList.add("janeal");
         
        if(idf!=0){
            var creform =document.getElementById(idf);
            creform.appendChild(jane);
        }else{
            document.body.appendChild(jane);
        }
     	
        el=al;
        bprn = 'janeal';
     }
     else{
         bprn = 'jane'; 
         jane.classList.add("jane"); 
      	document.body.appendChild(jane);
         
     }
   
    	z.classList.add("zcentM");
      	jane.appendChild(z);
        
    	jane_content.classList.add("jane-content");
      	z.appendChild(jane_content);
        
    	content.classList.add("contentM");
        content.innerHTML = "";
         content.id = el;
      	jane_content.appendChild(content);
       
        
        
      	span.innerHTML = "×";
      	span.classList.add("closeM");
      	span.appendChild(logo);
      	logo.classList.add("logoM");
      	logo.setAttribute("src",genesis+"/assets/imagens/logo/logo.png");
      	span.onclick=function(){ 
      	removeJane('jane');
      	//bprn = 'jane';
      	};
      	jane_content.insertBefore(span,content);
  
}


function removeJane(el){
    arr = document.getElementsByClassName(el);
    arr[arr.length -1].remove();
}

/******************************************************************************/


function coverh(){
    
    var cover1 = document.createElement('div');
    var cover2 =document.createElement('div');
    var coverz =document.createElement('div');
    var gif = document.createElement('img');
    
    
    cover1.style.display ="block";
    cover1.classList.add('cover1');
    document.body.appendChild(cover1);
    
     coverz.classList.add('coverz');
    cover1.appendChild(coverz);
    
    cover2.classList.add('cover2');
    coverz.appendChild(cover2);
    
    gif.classList.add('covergif');
    gif.setAttribute("src",genesis+"/assets/imagens/gifs/gira.gif");
    cover2.appendChild(gif);
    
}


function removecover(el){
    if(document.getElementsByClassName('cover1')[0] != null){
        document.getElementsByClassName('cover1')[0].remove();
    }
}


function logout(){
    sessionStorage.setItem("nivel", "");
    sessionStorage.setItem("lguser", "");
   // console.log(sessionStorage.getItem("nivel"));
    window.location.href = genesis+"/adm/sair";
}


//input: classe,id, type, name, placeholder, valor, outro qlqr atributo  ,onclick              // div:type=outro

//classe,id,name,onchange, prmopt,tipo,array opcoes
//option = value,nome
function show_form(obj,type,id){
    for(var x=0;x < obj.length;x++){
        if(type == 'input'){
            
            $("#"+id).append('<div class="imput_item"><input type="'+obj[x][2]+'" id="'+obj[x][1]+'" class="'+obj[x][0]+'" name="'+obj[x][3]+'" placeholder="'+obj[x][4]+'" value="'+obj[x][5]+'" '+obj[x][6]+'="" onkeydown="'+obj[x][7]+'"></div>');
            
        }else if(type == 'select'){
            if(document.getElementById(obj[x][1]) == null){
                $("#"+id).append('<div class="imput_item"><select class="'+obj[x][0]+'" id="'+obj[x][1]+'" name="'+obj[x][2]+'" onchange="'+obj[x][3]+'" data-c="'+obj[x][3]+'"><option value="">'+obj[x][4]+'</option></select></div>');
            }
            if(obj[x][5] == 'fixo'){
                for(var y=0; y < obj[x][6].length; y++){
                    $("#"+obj[x][1]).append('<option value="'+obj[x][6][y][0]+'">'+obj[x][6][y][1]+'</option>');
                }
            }
        }
    }
    
    if(type == 'outro'){
        $("#"+id).append(obj);
    }
    
}


// area usuario

function getHomeUser(){
    var w = new Worker(genesis+'/assets/js/modulo_get.js');
    w.postMessage({'ctr':'sessao/getInfosUser','extrair':true,'indice':'infos'});
    w.onmessage = function(e){
            var arr = e.data;
            var arrPac = arr.pacote.split(';');
            var arrIdPac = arr.id_pac.split(';');
            var arrQnt = arr.produtos.split(';');
            var arrContr= arr.data_contrato.split(';');
            var qntPac = arr.qnt_pac.split(';');
            var arrProfss = arr.profissional.split(';');
            var arrVali = arr.data_contrato.split(';');
            fras_stus = '';
                
                var workerProds = new Worker(genesis+'/assets/js/modulo_post.js');
                
                workerProds.postMessage({'ctr':'adm/getProdutos','indice':'produtos','post':'filtro=','extrair':true});

                workerProds.onmessage = function(e){
                    var arr2= e.data;
                    var btn_contratar = '';
                    var btn_renovar = '';
                    var btn_recuperar = '';
                    var status_conta = '';
                    var color_sts = '';
                    
                    
                    for(var pc=0;pc < arrPac.length; pc++){
                            btn_contratar = '<span class="fl" style="padding-left: 5px;cursor:pointer;" title="Contratar pacote"><div class="btn_pac" onclick="jane(\''+'box_contr'+'\');contratar('+arr.id+', \'' +arr.nome+ '\',\''+'contratar'+'\');">ADICIONAR PACOTE</div></span>';
                        
                            if(arrIdPac[pc] == ''){
                                if(arrContr[pc] == ''){
                                    $("#status_conta_"+arr.id).html('<span class="cx_staus_pac" style="cursor: default;margin-left:3%;font-size:13px;color:red;">'+'Inativo'.toUpperCase()+'</span>');
                                    $("#dv_contrt_"+arr.id).html('<div class="gaf-12">'+btn_contratar+'</div>');
                                }
                            }
                        
                        if(arrPac.length > 0 && arrPac != ''){
                            var splPac = arrPac[pc].split(' ');
                            if(arrProfss[pc] === undefined){
                                profssome = '';
                            }else{
                                profssome = arrProfss[pc];
                            }
                        
                        
                        if(arr2.id == arrIdPac[pc]){
                                //calcula a data de expiração do pacote
                                var prxmesval = '';
                                var dtval = '';
                                var splval = arrVali[pc].split('/');

                                if(splval[1] < 12){
                                    prxmesval = parseInt(splval[1]) + 1;
                                }else if(splval[1] == 12){
                                    prxmesval = '1';
                                    splval[2] ++;
                                }

                                var dtval_str = '';
                                if(splval.length > 1){
                                    dtval  = new Date(splval[2], prxmesval-1, splval[0]);
                                    if(prxmesval < 10){
                                        prxmesval = '0'+prxmesval;
                                        
                                        dtval_str = splval[0]+'/'+(prxmesval)+'/'+splval[2];
                                    }
                                    
                                }
                                // data atual
                                var dateAtl = new Date();

                                if(dateAtl > dtval && arrQnt[pc] > 0){
                                    btn_recuperar = '<span class="gaf-12" style="margin-left: 35%;cursor:pointer;" title="Extender prazo"><div class="btn_pac" onclick="pac_user('+arrIdPac[pc]+',\'' +'extender'+ '\','+arr.id+')">EXTENDER </div></span>';
                                }
                                
                                if(fras_stus == '' || fras_stus != 'ativo'){
                                    if(dateAtl < dtval && arrQnt[pc] == 0){
                                        fras_stus = 'consumido';
                                        color_sts = 'yellow';
                                        btn_renovar = '<span class="gaf-12" style="cursor:pointer;" title="Renovar pacote"><div class="btn_pac" onclick="renovar('+arrIdPac[pc]+',\'' +arr2.nome+ '\','+arr2.valor+','+qntPac[pc]+','+arr2.servicos+','+arr.id+',\''+arr.nome+'\')">RENOVAR</div></span>';
                                    }else if(dateAtl > dtval || dateAtl == dtval){
                                        fras_stus = 'inativo';
                                        color_sts = 'red';
                                        
                                    }else if(dateAtl < dtval){
                                        fras_stus = 'ativo';
                                        color_sts = '#2cd02c';
                                    }
                                    
                                }

                                $("#dv_contrt_"+arr.id).html('<div class="gaf-12">'+btn_contratar+'</div>');
                                $("#status_conta_"+arr.id).html('<span class="cx_staus_pac" style="cursor: default;margin-left:7%;font-size:13px;color:'+color_sts+';">'+fras_stus.toUpperCase()+'</span>');
                                
                                if(dateAtl > dtval){
                                    btn_renovar = '<span class="gaf-12" style="cursor:pointer;" title="Renovar pacote"><div class="btn_pac" onclick="renovar('+arrIdPac[pc]+',\'' +arr2.nome+ '\','+arr2.valor+','+qntPac[pc]+','+arr2.servicos+','+arr.id+',\''+arr.nome+'\')">RENOVAR</div></span>';
                                }
                            
                            
                            qntaula = arrQnt[pc];
                            contrato = arrContr[pc];
                            qntapac = parseInt(arr2.qnt) * parseInt(qntPac[pc]);
                            aconcl = parseInt(qntapac) - parseInt(qntaula);
                            if(document.getElementById("pac_"+arr.id+'_'+arr2.id) == null){
                                $("#info_user").append('<div class="gaf-12" id="pac_'+arr.id+'_'+arr2.id+'" style="padding:2%;font-size: 13px;text-transform: uppercase;"></div>');
                                $('#pac_'+arr.id+'_'+arr2.id).append('<div class="fl">STATUS: </div><div class="fl" style="padding-left: 2%;"><div style="font-size: 14px;font-weight: bold;color: #2cd02c;background: #fff;border-radius: 6px;padding: 3px;line-height: 8px;color:'+color_sts+';" class="">'+fras_stus.toUpperCase()+'</div></div><div class="fl" style="padding-left: 2%;">'+qntaula+' '+arr2.caract+' restante(s)</div>');
                                    
                                
                            }
                        }
                            var comp = pc+1;

                            if(comp == arrPac.length ){
                                fras_stus = '';
                            }
                        
                        }
                        
                    }
                    
                }
        
    }
}
/******************************************************************************/

// api google maps
function getMaps(lat,lng,end,loc,im){
    $("#box_local").append('<div class="gaf-12"><div class="gaf-12" style="padding:10px;"><div class="gaf-12"><div class="fl"><img src="'+genesis+'/assets/imagens/logo/'+im+'" style="width:30px;height:30px;border-radius:4px;"></div><div class="fl" style="line-height: 47px;margin-left:5px;">'+loc+'</div></div><div>Endereço: '+end+'</div></div></div>');
    $("#box_local").append('<div class="gaf-12"><div style="padding:10px;"><div id="map"></div></div></div>');
    
    sessionStorage.setItem("crd", lat+';'+lng);
    var srcmps = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBU-dEtbPhUsDh6vL-O0rILRMpOk3aL0pE&callback=initMap&libraries=&v=weekly®ion=pt-BR';

    let scripts = document.getElementsByTagName("script");/*
    for(let i=0;i < scripts.length;i++){
        if(scripts[i].src == srcmps){
            scripts[i].remove();
        }
    }*/
    removeGoogleMapScript();
    
    var script = document.createElement('script');
    script.setAttribute('type', 'text/javascript');
    script.setAttribute('src', srcmps);
    document.body.appendChild(script);
    
    // Initialize and add the map
}

function removeGoogleMapScript() {
    let keywords = ['maps.googleapis'];

    //Remove google from BOM (window object)
    window.google = undefined;

    //Remove google map scripts from DOM
    let scripts = document.head.getElementsByTagName("script");
    for (let i = scripts.length - 1; i >= 0; i--) {
        let scriptSource = scripts[i].getAttribute('src');
        if (scriptSource != null) {
            if (keywords.filter(item => scriptSource.includes(item)).length) {
                scripts[i].remove();
                //scripts[i].parentNode.removeChild(scripts[i]);
            }
        }
    }
}

function initMap() {
      // The location of Uluru
      var arr =  sessionStorage.getItem("crd").split(';');

      var lat = parseFloat(arr[0]);
      var lng = parseFloat(arr[1]);
      
      const uluru = { lat: lat, lng: lng };

      // The map, centered at Uluru
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 18,
        center: uluru,
        mapTypeId: 'roadmap'

      });
      // The marker, positioned at Uluru
      const marker = new google.maps.Marker({
        position: uluru,
        map: map,
      });
    }



/**************************************************************/
// wbApp

function wpp(){
    var title = document.title;
    if(document.getElementById("box_wpp") == null){
        jane('box_wpp');
        document.getElementById("box_wpp").style.height = "160px";
        $("#box_wpp").append('<div class="gaf-12" style="height: 100%;"><div class="fl" style="line-height: 33px;font-weight:bold;margin-left:5%;position:relative;color: #fff;"><div>ADICIONE O APP</div> <div style="font-size:20px;font-style: italic;font-weight: normal;color: #000;">'+title+'</div><div> EM SEU SMARTFONE!</div></div><div class="gaf-12" style="text-align:center;"><button class="add-button buttWap">INSTALAR</button></div></div>');
    }
}


/***************************************************************/
//fil post

async function getFiltPost(){
    let estado = await estadoDaInternet();
    console.log(estado);
    
    if(estado =='1'){
        var w = new Worker(genesis+"/assets/js/modulo_post.js");
        var filt = document.getElementById("filtro_post").value;
        el = null;
        
        w.postMessage({'ctr':'adm/getfiltpost','indice':'retrn','extrair':false,'post':'filtro='+filt});
        if(w == null){
            postMessage(null);
        }
        w.onmessage = function(e){
            if(e.data == '04' || e.data == '500'){
                removecover();
        		alert_confrm('Falha na conexão com a internet');
            }
           else{
               removecover();
                $("#editar").html('<div class="gaf-12" id="bxescpst"></div>');
                var arr = e.data.retrn;
                for(var x=0;x < arr.length;x++){
                    $("#bxescpst").append('<div class="gaf-12 box"><div class="gaf-12"><div title="'+arr[x].titulo+'" class="dvagndadm"><div class="gaf-12"><label for="chk_venda_'+arr[x].id+'" class="cont_chk"><input type="checkbox" name="post_edit" id="chk_venda_'+arr[x].id+'" value="'+arr[x].id+'" onclick="coverh();getEditPost('+arr[x].id+');"><span class="checkmarc"></span></label></div></div></div></div></div>');
                    
                    $("#bxescpst").append('<div class="gaf-12 vbox item " id="bxedtpst'+arr[x].id+'" style="padding: 3px;border-radius: 4px;background: #fff;margin-bottom: 5px;"><div class="gaf-12" style="text-align: left;padding-left: 10%;"><div class="fl" style="min-width:300px;max-width:300px;"><span class="fl">'+arr[x].titulo+'</span></div></div>');
                }
                
            }e.data= 'null';
        }
    }else{
        removecover();
        alert_confrm('sem conexão com a internet');
    }
}
 
//create post

function criacaoPost(){
    $("#creatPost").html('<div class="gaf-12"><div id="bx_tp" class="gaf-12 bxpost"> <div class="tits">TIPO DE POST</div> <div id="tppst"></div> </div></div>');
    
    $("#tppst").append('<div class="gaf-6 row" style="margin-bottom:4px;"><div class="btmdfpd row"> <div class="gaf-12 btmdf" onclick="createPost(\''+'artigo'+'\');"><div class="fl" style="width:25px; margin-left:1%;"><img src="'+genesis+'/assets/imagens/adm_icons/post.png" style="width:100%;"></div> <div class="fl btmd">Artigo</div> </div></div> '+
    '<div class="btmdfpd row"> <div class="gaf-12 btmdf" onclick="createPost(\''+'video'+'\');"><div class="fl" style="width:25px; margin-left:1%;"><img src="'+genesis+'/assets/imagens/adm_icons/post.png" style="width:100%;"></div>     <div class="fl btmd">Video</div> </div></div>'+
    '<div class="btmdfpd row"> <div class="gaf-12 btmdf" onclick="createPost(\''+'propg'+'\');"><div class="fl" style="width:25px; margin-left:1%;"><img src="'+genesis+'/assets/imagens/adm_icons/post.png" style="width:100%;"></div>   <div class="fl btmd">Divulgação</div> </div></div></div>'+
    '<div class=""><div id="resultado"></div><div class="gaf-12" style="margin-top:1%;display:;" id="box_post"></div></div>  ');
}

function createPost(tipo,nvl=1){
    coverh();
    function prntCP(){
        if(tipo != 'edit'){
            
            var x = tipo;
            if(tipo == 'propg'){
                x = 'divulvação';
            }else if(tipo == 'conteudo'){
                x  = 'conteúdo';
            }
            
            $("#box_post").html('<div class="gaf-12"><form method="POST" enctype="multipart/form-data" action="" id="form_post" autocomplete="off"><div id="categ"></div><div id="tipo"></div><div style="margin-top: 1%;display:none;" class="form " id="post"><div class="gaf-12 tits" style="text-transform:uppercase;">CRIAR POST - '+x+'</div><div id="aguarde"></div></div></form></div>');
            
            if(tipo == 'artigo'){
                $("#post").append('<div class="z-9"><div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="fl form_ret_descri destit">Imagem principal:</div></div><div class="gafnm-6"><div class="sub_bot_d" onclick="prntUploadImg();" style="max-width:215px;margin-left:0px;text-align: center;margin-top:0px;" id="escImg">Escolher imagem</div><div class="anexo"></div></div><div id="upimg_artigo"></div></div> <div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="fl form_ret_descri destit">Descrição da imagem:</div></div><div class="gafnm-6"> <input type="text" name="alt_post"></div></div>  <div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="fl form_ret_descri destit">Autor da imagem:</div></div><div class="gafnm-6"><input type="text" name="autor_img"></div></div> <div class="gaf-12 form_ret_box"><div class="gaf-12 form_ret_descri"><div class="gafnm-4"><div class="fl destit">Titulo do post:</div></div><div class="gafnm-6"><input type="text" name="titulo_post" maxlength="100"></div></div></div> <div class="gaf-12 form_ret_box"><div class="gaf-12 form_ret_descri"><div class="gafnm-4"><div class="fl destit">Nível de sessão:</div></div><div class="gafnm-6"><div class="">Público <input type="radio" name="nivel" value="1"></div><div class="">Privado <input type="radio" name="nivel" value="2"></div></div></div></div> <div class="gaf-12 form_ret_box"><div class="gaf-12 form_ret_descri"><div class="gafnm-4"><div class="fl destit">Background color - 1</div></div><div class="gafnm-6 destit"><input type="color" value="#ffffff" name="bgcolor1" id="bg1"></div></div></div> <div class="gaf-12 form_ret_box"><div class="gaf-12 form_ret_descri"><div class="gafnm-4"><div class="fl destit">Background color - 2</div></div><div class="gafnm-6 destit"><input type="color" value="#ffffff" name="bgcolor2"></div></div><div></div></div>  <div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="fl form_ret_descri destit">Fonte:</div></div><div class="gafnm-6"><input type="text" name="fonte"> </div></div> <div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="fl form_ret_descri destit">Pré conteúdo:</div></div><div class="gafnm-6"><textarea cols="40" name="pre_texto" rows="4" maxlength="200" placeholder="Pré-texto * (breve resumo)"></textarea></div></div> <div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="fl form_ret_descri destit">Destacar post:</div></div><div class="gafnm-6 destit"><div class="fl form_ret_descri" style="padding-right:1%;">Sim</div><div class="fl"><input type="checkbox" name="destaque" value="sim" style="cursor:pointer;"></div></div></div> <div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="fl form_ret_descri destit">Conteúdo:</div></div><div class="gaf-12"><textarea cols="10" name="new_post" rows="10"></textarea></div></div> <div id="inpSize"></div> <div class="gaf-12 form_ret_box"><button type="button" id="btn_submit" onclick="enviar_form_file(\''+'form_post'+'\');concl_post();">Postar</button></div>   </div>');
                CKEDITOR.replace( 'new_post' );
                tipo_post('artigo');
            }else if(tipo == 'video'){
                $("#post").append('<div id="box_video" class="z-9"> <div class="gaf-12 form_ret_box"><div class="gaf-12 form_ret_descri"><div class="gafnm-4"><div class="fl destit">Título do post:</div></div><div class="gafnm-6"><input type="text" name="titulo_video"></div></div></div> <div class="gaf-12 form_ret_box"><div class="gaf-12 form_ret_descri"><div class="gafnm-4"><div class="fl destit">Id do video no youtube (URL):</div></div><div class="gafnm-6">v=<input type="text" accept=".jpg,.png,.jpeg" name="url_video" placeholder="Ex.: o-tZe2uT958"></div></div></div> <div id="upimg_video"></div> <div class="gaf-12 form_ret_box"><div class="gaf-12 form_ret_descri"><div class="gafnm-4"><div class="fl destit">Nível de sessão:</div></div><div class="gafnm-6"><div class="">Público <input type="radio" name="nivel" value="1"></div><div class="">Privado <input type="radio" name="nivel" value="2"></div></div></div></div> <!--<p>Conteúdo: </p><textarea  cols="10" rows="10" name="content_video" maxlength="200"></textarea>--> <div class="gaf-12 form_ret_box"><input type="submit" id="btn_submit" onclick="enviar_form(\''+'form_post'+'\',\''+'adm/criacao'+'\');concl_post();" value="Postar"></div> </div>');  //concl_post();
                tipo_post('video');
            }else if(tipo == 'propg'){
                $("#post").append('<div class="z-9"> <div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="fl form_ret_descri destit">Imagem do post:</div></div><div class="gafnm-6"> <div class="sub_bot_d" onclick="prntUploadImg();" style="max-width:215px;margin-left:7px;text-align: center;margin-top:1%;" id="escImg">Escolher imagem</div></div><div id="upimg_propg"></div> <div class="gaf-12"><div class="anexo"></div></div> </div> <div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="fl form_ret_descri destit">Link para redirecionar</div></div><div class="gafnm-6"> <input type="text" name="url_propg" placeholder="Ex.: www.hafleuki.com.br"></div></div> <div class="gaf-12 form_ret_box"><button type="button" id="btn_submit" onclick="enviar_form_file(\''+'form_post'+'\');concl_post();">Postar</button></div>  </div>');
                tipo_post('propg');
                //<div id="box_propg" class="form" style="display:none;"><h4>Criar Post Propaganda</h4><div id="upimg_propg"></div><div><input type="file" id="img_propg" style="display:none;" accept=".jpg,.png,.jpeg" name="img_propg"><div class="btn_upload"><label style="cursor:pointer;margin-top:1%;" for="img_propg">Upload Imagem</label></div><br></div><div>Página (url) de redirecionamento:<br><input type="text" name="url_propg" placeholder="Ex.: www.hafleuki.com.br"><br></div> 
            }else if(tipo == 'conteudo'){
                $("#post").append('<div id="box_content" class="z-9" style="display:none;"><h4>Criar Conteúdo</h4><div class="gaf-12"><button type="button" id="btn_submit" onclick="enviar_form_file(\''+'form_post'+'\');"></button>Postar</div><div id="categ_s" style="display:none;"><input type="text" placeholder="Nome" name="tit_s2"><select id="categ_service" name="categ_service"><option value="">Referente a:</option></select></div><div class="gaf-12" id="preferencia"></div><textarea style="resize:none;display:none;" cols="60" class="sla2" name="new_content" id="new_content" rows="10" wrap="hard">Escreva aqui</textarea><pre id="editor"> </pre></div>');
                tipo_post('conteudo');
            }
            verCateg();
           // document.getElementById("bx_tp").style.display = 'none';
        }else if(tipo == 'edit'){
            var call;
            if(nvl == 2){
                call = 'getPosts(0,0,0,0,false,false,'+nvl+')';
            }else{
                call = 'getFiltPost()';
            }
            $("#edit_post").html('<div id="tipo"></div><div id="edit_post" style="margin-top: 1%;">'+
            '<div class="gaf-12"><div class="gaf-12 form"><div class="gaf-12" style="margin-top: 10px;margin-bottom: 10px;"><div class="fl"><input type="text" id="filtro_post" placeholder="\''+'Buscar" post'+'\'="" onkeyup="'+call+'"></div><div class="gaf-12" style="margin-top: 1%;" id="editar"></div></div></div></div><div class="gaf-12" style="margin-top: 1%;" id="prnt_edtpost"></div>'+
            '</div>');
            tipo_post('edit');
            removecover();
        }
        
    }
    prntCP();
}

function tipo_post(ref){
    if(ref == 'artigo'){
        $("#tipo").html('<input type="hidden" name="tipo" value="artigo"><input type="hidden" id="inptipo" value="'+ref+'">');
    }else if(ref == 'video'){
        $("#tipo").html('<input type="hidden" name="tipo" value="video"><input type="hidden" id="inptipo" value="'+ref+'">');
    }else if(ref == 'propg'){
        $("#tipo").html('<input type="hidden" name="tipo" value="propaganda"><input type="hidden" id="inptipo" value="'+ref+'">');
    }else if(ref == 'conteudo'){
        var categ = $('input[name="categ[]"]:checked');

        if(categ.length > 0){
            for(var x =0;x < categ.length;x++){

                if(categ[x].value == '13'){
                    $("#preferencia").html('<div class="gaf-12"><input type="text" placeholder="Nome do serviço" name="servico"></div>');
                }else if(categ[x].value == '15'){
                    document.getElementById("categ_s").style.display = 'block';
                }
            }
        }
        $("#tipo").html('<input type="hidden" name="tipo" value="'+ref+'"><input type="hidden" id="inptipo" value="'+ref+'">');
    }else if(ref == 'edit'){
        $("#tipo").html('<input type="hidden" id="inptipo" value="'+ref+'">');
    }
}

function verCateg(){
    var WorkerGetCategs = new Worker(genesis+"/assets/js/getCategs.js");
    WorkerGetCategs.postMessage('start');
    
    WorkerGetCategs.onmessage = function(e){
        var arr = e.data.categs;
        removecover();
        $("#categ").html('<div class="gaf-12 tits">CATEGORIA</div>');
        for(var c=0;c < arr.length;c++){
            var id_proj = arr[c].id_projeto;
            var nome = arr[c].nome;
            var id = arr[c].id;
            
            $("#categ").append('<div class="gaf-12 btmdfpd"><label for="lblcatg'+id+'" class="btmd"><div class="gaf-12 btmdf"> <div class="fl" style="margin:5px;margin-bottom:0px;"><input type="checkbox" name="categ[]" id="lblcatg'+id+'" value="'+id+'"></div> <div class="fl" style="line-height: 28px;">'+nome+'</div> </div></label></div>');
            
            var el = document.getElementById("lblcatg"+id);
            el.addEventListener('click',(e)=>{
                var el = document.getElementById("post");
                if(el.style.display == 'none'){
                    el.style.display = 'block';
                }
            },false);
                
            
        }
    }
}

function getEditPost(id){
    var w = new Worker(genesis+'/assets/js/modulo_get.js');
    w.postMessage({'ctr':'dev/getPostEdit/'+id});
    head(genesis+'/library/ckeditor/ckeditor.js');
    
    w.onmessage = function(e){
        var arr = e.data.post;
        $("#bxescpst").remove();
        
        $("#prnt_edtpost").html('<div class="gaf-12"><div class="gaf-12"><div class="gaf-12 tits">Editação de Post</div></div> <div class="gaf-12" id="btnexc"></div> <div class="gaf-12"><form method="POST" class="gaf-12" id="box_edit"><div id="sucss_edit"></div><div id="inptId"></div><div class="form" id="inputs_edit"></div><div><input type="submit" style="margin-top: 1%;margin-bottom: 1%;" value="Salvar alterações"></div></form></div> </div>');
        
        
        for(var c=0;c < arr.length;c++){
            var post = arr[c].post;
            var titulo = arr[c].titulo;
            var pre_texto = arr[c].resumo;
            var img = arr[c].img;
            var w = arr[c].width;
            var h = arr[c].height;
            
            var bg1 = arr[c].bgcolor1;
            if(bg1 == ''){
                bg1 = '#fff';
            }
            var bg2 = arr[c].bgcolor2;
            if(bg2 == ''){
                bg2 = '#fff';
            }
            
            var resm = arr[c].resumo ;
            var fonte = arr[c].fonte;
            var autImg = arr[c].autor_img;
            
            var id_destq = arr[c].destaque;
            var destq;
            var dvalue;
            if(id_destq == 1){
                destq = 'checked';
            }else{
                destq = '';
            }
            var b64Length; var w;var h;
            
            var rota = genesis+'/assets/imagens/img_blog/'+img;
            if(img.includes('data:image') == true){
                rota = img;
            }

            
            var id = arr[c].id;
            $('#inputs_edit').html('');
            
            $("#btnexc").append('<div class="gaf-12 form_ret_box"><div onclick="excPost('+arr[c].id+',0)" style="width:100px;float:left;background: #fff;cursor:pointer;border:1px solid;margin-left:15px;border-radius: 4px;"><span class="fl"><img src="'+genesis+'/assets/imagens/icones/lixeira.png" style="width:20px;height:20px;margin-top: 3px;"></span><span class="fl" style="text-transform: uppercase;font-size: 10px;line-height: 27px;">Excluir post</span></div></div>');
            
            $('#inputs_edit').append('<div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="fl form_ret_descri destit">Titulo:</div> </div> <div class="gafnm-6"><input type="text" id="new_titulo" value="'+titulo+'" name="titulo" style="width:500px;margin-left: 26px;margin-bottom: 1%;" maxlength="110"></div></div> <div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="sub_bot_d" onclick="prntUploadImg();" style="max-width:215px;margin-left:0px;text-align: center;" id="escImg">Alterar imagem</div></div> <div class="gafnm-6"><div class="anexo"></div><div id="upimg_edit"><input type="hidden" name="img_edit" value="'+img+'"></div><div id="prntimgnm" style="margin:7px;display:;"><img src="'+rota+'" style="width:250px;"></div></div></div></div>  <div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="fl form_ret_descri destit">Background color - 1: </div></div><div class="gafnm-6 form_ret_descri destit"><input type="color" name="bgcolor1" value="'+bg1+'">'+bg1+'</div></div>  <div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="fl form_ret_descri destit">Background color - 2: </div></div><div class="gafnm-6 form_ret_descri destit"><input type="color" name="bgcolor2" value="'+bg2+'">'+bg2+'</div></div>');
            
            $('#inputs_edit').append('<div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="fl form_ret_descri destit">Fonte:</div></div><div class="gafnm-6"><input type="text" name="fonte" value="'+fonte+'"></div></div>  <div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="fl form_ret_descri destit">Autor imagem:</div></div><div class="gafnm-6"><input type="text" name="autimg" value="'+autImg+'"></div></div>   <div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="fl form_ret_descri destit">Destaque:</div></div><div class="gafnm-6 desctit"><div class="fl form_ret_descri" style="padding-right:1%;">Sim </div><div class="fl" style="cursor:pointer;"><input type="checkbox" name="destaque" '+destq+'="" value="1"></div></div></div>  ');
            
            $('#inputs_edit').append('<div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="fl form_ret_descri destit">Pré texto: </div></div><div class="gafnm-6"><textarea cols="30" id="new_resumo" name="resumo" rows="5" style="width: 471px; height: 82px;" maxlength="250" wrap="hard">'+pre_texto+'</textarea></div></div>');
            
            $('#inputs_edit').append('<div class="gaf-12 form_ret_box"><div class="gafnm-4"><div class="fl form_ret_descri destit">Conteúdo:</div></div><div class="gaf-12"><textarea cols="10" name="new_editor" id="new_editor" rows="10">'+post+'</textarea></div></div>');
            $('#inputs_edit').append('<input type="hidden" value="'+id+'" name="ref" id="id_post"><div id="inpSize"><input type="hidden" name="height" value="'+h+'"><input type="hidden" name="width" value="'+w+'"></div>');
            
            $('#inptId').html('<input type="hidden" value="'+id+'" name="ref" id="id_post">');

            document.getElementById('editar').style.display = 'block';
            
        }
       
        CKEDITOR.replace( 'new_editor' );
        removecover();
        
    }
}

function thumbmail() {
    var _URL = window.URL || window.webkitURL;
    e = document.getElementById("img_post");
    $("#prntimg").html('<div class="anexo"></div>');
    
    var extensoes, valido, file, img;
    extensoes = new Array('.jpg', '.png', '.jpeg','.webp');
    validar = false; validar_ext = false;
    
    if ((file = e.files[0])) {
        img = new Image();
        
        // printa nome da imagem upload
        $(".anexo").html('<div><span>Anexado: </span><span style="padding-left:5px;">'+file.name+'</span></div>');
        
        document.getElementById("lablImgUpl").innerHTML = 'Alterar Imagem';
        document.getElementById("escImg").innerHTML = 'Alterar Imagem';
        
        // recebendo o tipo de arquivo e armazenando na variavel
        var arquivo = (file.name.substring(file.name.lastIndexOf(".")).toLowerCase());
        
        img.onload = function () {
            var tipoPost;
            if(document.getElementById("inptipo") !== null){
                tipoPost = document.getElementById("inptipo").value;
            }else{
                tipoPost = '';
            }
             // cria previw da imagem selecionada pelo usuario
          //  $("#prntimgnm").html('<img src="'+img.src+'" style="width:100px;"><div class="sub_bot_d" style="max-width: 205px;margin-left: 0px;" onclick="jane(\''+'box_recorte'+'\');prntCorte();">Escolher recorte</div>');
        
            // verificando o tamanho da imagem em largura
            if (this.width < 600){
                alert_confrm('Imagem com dimensões menor que o permitido! Para este Upload é necessário que a imagem tenha Largura de no mínimo 600px',0,0);
                document.getElementById("img_post").value = "";  
                $("#prntimg").html(''); $(".anexo").html('');
                document.getElementById("btnSubImg").style.display = 'none';
            }else{
                validar = true;
            }

            // validando os tipos de arquivo
            if(arquivo == ".jpeg" || arquivo == ".jpg" || arquivo == ".png" || arquivo == '.webp'){
                validar_ext = true;   
            } else{
                alert_confrm('Imagem com Extensão diferente do permitido! Somente Imagens JPG, PNG , JPEG e WEBP são Permitidas!',0,1)
                document.getElementById("img_post").value = "";
            }               

            if(validar === true && validar_ext === true){
                    // calcula o ratio;
                    r = this.height / this.width;
                    console.log('ratio',r)
                    
                    if(r != 1){
                        wView = 600;
                        r = wView / this.width;
                        hView = r * this.height;
                    }else{
                        wView = 600;
                        hView = 600;
                    }
        
                    
                    console.log('img',img)
                    console.log('file',file)
                    wOrign = this.width;
                    hOrign = this.height;
                    
                    q = 0.5 ; ext = file.type;
                    
                    //img,w,h,x=0,y=0,q
                    var to64semresize = getDataUrl(img,wOrign,hOrign,0,0,ext,q);
                    console.log('to64semresize',to64semresize);
                    console.log('to64semresize lewngth',to64semresize.length);
                    
                    var to64 = outr(img,ext,q);
                    console.log('to64',to64);
                    
                    var decoded = atob(to64.split(',')[1]); // atob decodes base 64
                    console.log('size canvas',decoded.length); 
                    
                    
                    $("#prntimg").append('<img class="bs2" src="'+to64+'" style="width:'+wView+'px;height:'+hView+'px;">');  
                    document.getElementById("btnSubImg").style.display = 'block';
                    
                    $("#inpSize").html('<input type="hidden" name="height" value="'+hView+'">');
                    $("#inpSize").append('<input type="hidden" name="width" value="'+wView+'">');
                    
            }
        };
        
        img.src = _URL.createObjectURL(file);
    }
    
}

function to64Img(){
    var img = new Image();
    console.log('to64Img');
    setTimeout(function(){
        img.onload = function () {
            q = 0.5 ; ext = 'image/jpeg';
            img.width = this.width;
            img.height = this.height;
            
            var to64 = outr(img,ext,q);
            
            //add hash da nova imagem ao formulario;
            var tipoPost = document.getElementById("inptipo").value;
            console.log('tipoPost',tipoPost);
            $("#upimg_"+tipoPost).html('<input type="hidden" name="img_'+tipoPost+'" value="'+to64+'">');
            $('#prntimgnm').html('<img style="width:250px;" src="'+to64+'">');
            
            //exclui imagem temporaria
            var w = new Worker(genesis+'/assets/js/modulo_post.js');
            console.log('lol')
            w.onmessage = function(e){
                console.log('del',e.data);
                if(e.data.retn == true){
                    console.log('foi deletado');
                    removecover();
                    removeJane('jane');
                }else{
                    document.getElementById("img_post").value = "";  
                    $("#prntimg").html(''); $(".anexo").html('');
                    document.getElementById("btnSubImg").style.display = 'none';
                    removecover();
                    alert_confrm('Erro ao salvar Imagem. Contate o suporte')
                }
            }
            w.postMessage({'ctr':'adm/delTmpImg','extrair':false,'indice':'retn','post':'deletar=sim'});
            
        }
        img.src = genesis+'/assets/imagens/tmp/tmp_post.jpg';
    },5000)
    
    
}

function outr(img,ext,q){
    var canvas = document.createElement('canvas'),
    ctx = canvas.getContext("2d"),
    oc = document.createElement('canvas'),
    octx = oc.getContext('2d');
    console.log('aqui canvas.toDataURL');
    
    width =600;
    canvas.width = width; // destination canvas size
    canvas.height = canvas.width * img.height / img.width;

    var cur = {
      width: Math.floor(img.width * 0.5),
      height: Math.floor(img.height * 0.5)
    }

    oc.width = cur.width;
    oc.height = cur.height;

    octx.drawImage(img, 0, 0, cur.width, cur.height);

    while (cur.width * 0.5 > width) {
      cur = {
        width: Math.floor(cur.width * 0.5),
        height: Math.floor(cur.height * 0.5)
      };
      octx.drawImage(oc, 0, 0, cur.width * 2, cur.height * 2, 0, 0, cur.width, cur.height);
    }

    ctx.drawImage(oc, 0, 0, cur.width, cur.height, 0, 0, canvas.width, canvas.height);
    return canvas.toDataURL(ext,q);
}

var getDataUrl = function (img,w,h,x=0,y=0,ext,q) {
   var canvas = document.createElement('canvas');
   canvas.width = w;
   canvas.height = h;
   var ctx = canvas.getContext('2d');
   
    if(x != 0 || y != 0){
        console.log('aqui,getDataUrl')
        ctx.drawImage( img, x, y); 
    }else{
        ctx.drawImage( img, 0, 0, canvas.width,canvas.height); 
    }
    if(q == 0){
        return canvas.toDataURL(ext); //ext,q 'image/png',0.5
    }else{
        return canvas.toDataURL(ext,q);
    }
 };
 
 
 
 
 
/******************************************************************************/
// head
function head(url,el='',callback=0){
    var tag = document.createElement('script');
    tag.src = url;
    
    if(el != ''){
        var obj = JSON.parse(el);
        for (var property in obj){
            tag.setAttribute(property,obj[property]);
        }
    }
    
    var tags = document.getElementsByTagName('script');
    var a = Array.prototype.slice.call(tags);
    //console.log('tags a ',a);
    
    a.forEach((i,v)=>{
        //console.log('i.src',i.src);
        
        if(i.src == url){
            i.remove();
        }
        if(a.length == (v+1)){
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
            
            if(callback != 0){
                //console.log('callback');
                setTimeout(function (){callback();},500)
            }

        }
        
    });
    
}



/******************************************************************************/

function login(){
    closeNav();
    jane('login');
   
    $("#login").append('<div class="gaf-12 row form"><div class="gaf-12"><div class="gaf-12" style="background:#151515;min-width:;">'+
      
        '<form method="POST" autocomplete="off" id="form_login"><div class="gaf-12" style="min-width: 300px;border-radius: 2px;background:#f2f2f2;padding:10px;box-shadow: 0 0 10px #ccc9c9;"><div> <div style="padding: 5px;padding-left: 0px;font-size: 16px;"> <input type="text" class="inp_login" name="email_login" required="" placeholder="E-mail"></div><div style="padding: 5px;padding-left: 0px;font-size: 16px;"> <input type="password" class="inp_login" name="pass_login" required="" placeholder="Senha"></div><!--div  class="gaf-12" style="color: red;"></div--> </div>   <div style="padding-left: 5px;" id="grec">		</div>	<div class=" z-5"> <input type="submit" class="inpsub_login" name="submit_login" onclick="coverh();enviar_form(\''+'form_login'+'\',\''+'login'+'\',subLogn);" value="ENTRAR"></div>   </div>  </form> </div>   </div></div>');
     
    var pogc ='<div class="g-recaptcha " style="text-align:center;position:relative;" data-sitekey="6LftGMAUAAAAAEDhgHqLNZUknnDGJoDwsgLN8bqV"></div>'
    var cap = document.getElementById("grec");
   
 
   head('https://www.google.com/recaptcha/api.js',JSON.stringify({'type':'text/javascript'})) 
   cap.innerHTML = pogc
}

function subLogn(e){
   if(e.retn[0] == true){
       console.log(e.retn);
        if(e.retn[1] == '2'){
           window.location.href = genesis+"/sessao";
        }else if(e.retn[1] == '3' || e.retn[1] == '4'){
           window.location.href = genesis+"/adm";
        
        }else if(e.retn[1] == '5'){
           window.location.href = genesis+"/designer";
        }
   }else{
       removecover();
       alert_confrm(e.retn[0]);
   }
}

/******************************************************************************/

function cadUserSimples(){
    closeNav();
    jane('cadUserSimples');
    
    $("#cadUserSimples").append('<div class="gaf-12 row" style="max-width: 600px;"><form method="POST" class="form" id="formCadUser" autocomplete="off"> <div class="gaf-12 bfcc bs a">  <div class="t2c tit_df cb">CADASTRE-SE</div> <div class="gaf-12"><div class="gaf-12" style="margin-top: 3%;color:#fff"> <div class="gaf-12" style="margin-bottom:5%;text-transform: uppercase;font-size:15px;text-align: center;"><span>Crie uma conta na Hafleuki</span></div> <div class="gaf-12"><div class="gaf-12"><div class="z-7"><div class="gaf-12"> <div class="gaf-12"><input type="text" id="inpline" placeholder="Nome completo" name="nome"></div> <div class="gaf-12"><input type="text" id="inpline" placeholder="(DDD) + Nº Celular" maxlength="14" name="celular"></div> <div class="gaf-12"><div class="gaf-12" style="margin-top:10%;text-transform: uppercase;font-size:15px;"><div class="gaf-12" style="text-align: center;">Informações de Login</div></div></div> <div class="gaf-12"><input type="email" id="inpline" placeholder="E-mail" name="email"></div> <div class="gaf-12"><input type="password" id="inpline" name="pass" placeholder="Senha"></div><div class="gaf-12"><input type="password" id="inpline" placeholder="Repita a senha" class="cnfPass"></div><div id="cnfPass" style="font-size:13px;color:orange;padding-left: 5px;"></div> </div></div></div></div> </div>   <div class="gaf-12" style="margin-top: 10%;"><div class="zf-5"><input type="submit" class="gaf-12 sub_bot_d" value="CADASTRAR ➤" onclick="subCadUsr(\''+'formCadUser'+'\',\''+'cadastrar/cadSimpl'+'\');" style="min-width:150px;padding: 8px 20px;cursor:pointer;"> </div></div>     </div> </div></form>');
    
    let c = document.getElementsByName("celular")[0];
    if(c != null){
        c.addEventListener('keypress',function(e){
            console.log('oi')
            mascara_tel(e.target);
        },false);
    }

    let cnfPass = document.getElementsByClassName("cnfPass")[0];
    cnfPass.addEventListener("blur", function(e) {
        var e1 = e.target.value;
        var e2 = document.getElementsByName("pass")[0].value;
        
        if(e1 != e2){
            document.getElementById("cnfPass").innerHTML = 'As senhas não conferem, confira novamente.';
        }
    }, true);
    
    cnfPass.addEventListener("click", function(e) {
        document.getElementById("cnfPass").innerHTML = '';
    },false);
    
    
}

function subCadUsr(f,u,func=0){
    coverh();
    var frm = $('#'+f);
    frm.submit(function (e) {
        e.preventDefault();
    
        let e1 = document.getElementsByClassName("cnfPass")[0].value;
        let e2 = document.getElementsByName("pass")[0].value;
        
        if(e1 != e2){
            document.getElementById("cnfPass").innerHTML = 'As senhas não conferem.';
            removecover();
        }else{
            let n = document.getElementsByName("nome")[0].value;
            let p = document.getElementsByName("pass")[0].value;
            let e = document.getElementsByName("email")[0].value;
            let t = document.getElementsByName("celular")[0].value;
            if(p != '' && n != '' && e != '' && t != ''){
                var dados = frm.serialize();
        		var xhttp = new XMLHttpRequest();
        
        		xhttp.open("POST", genesis+"/"+u, true);
                xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        		xhttp.onreadystatechange = function() {
        
        			if(xhttp.status == 200 && xhttp.readyState == 4) {
        			    var retornoXhttp = JSON.parse(xhttp.responseText);
        			     if(func != 0){
        			         removecover();
        			         func(retornoXhttp);
        			     }else{
        			         if(retornoXhttp != false){
        			            console.log('aqui redireciona',retornoXhttp)
        			            window.location.href = genesis+"/sessao";
        			         }
        			     }
        			}else if(xhttp.readyState == 0) {
        			    removecover();
        			    alert_confrm('Falha na conexão com a internet');
        			}
        			else if(xhttp.status == 500){
        			     //console.log("erro enviar_form");
        			    removecover();
                        alert_confrm('Falha na conexão com a internet');
        		    }
        		}
        		xhttp.send(dados);
            }else{
                removecover();
                document.getElementById("cnfPass").innerHTML = 'Preencha todos os campos do formulário para prosseguir.';
            }
        }
    });
}
    
/******************************************************************************/

// Identificar o clique no menu
// Verificar o item que foi clicado e fazer referência com o alvo
// Verificar a distância entre o alvo e o topo
// Animar o scroll até o alvo

const itensLink = document.querySelectorAll('.exep a[href^="#"]');

itensLink.forEach(item => {
  item.addEventListener('click', scrollToIdOnClick);
})

function getScrollTopByHref(element) {
  const id = element.getAttribute('href');
  return document.querySelector(id).offsetTop;
}

function scrollToIdOnClick(event) {
  event.preventDefault();
  const to = getScrollTopByHref(event.target) - 80;
  scrollToPosition(to);
}

function scrollToPosition(to) {
    // esse trecho só funciona em chrome e firefox
  // window.scroll({
  //   top: to,
  //   behavior: "smooth",
  // });
  smoothScrollTo(0, to);
}

/**
 * Smooth scroll animation
 * @param {int} endX: destination x coordinate
 * @param {int} endY: destination y coordinate
 * @param {int} duration: animation duration in ms
 */
function smoothScrollTo(endX, endY, duration) {
  const startX = window.scrollX || window.pageXOffset;
  const startY = window.scrollY || window.pageYOffset;
  const distanceX = endX - startX;
  const distanceY = endY - startY;
  const startTime = new Date().getTime();

  duration = typeof duration !== 'undefined' ? duration : 400;

  // Easing function
  const easeInOutQuart = (time, from, distance, duration) => {
    if ((time /= duration / 2) < 1) return distance / 2 * time * time * time * time + from;
    return -distance / 2 * ((time -= 2) * time * time * time - 2) + from;
  };

  const timer = setInterval(() => {
    const time = new Date().getTime() - startTime;
    const newX = easeInOutQuart(time, startX, distanceX, duration);
    const newY = easeInOutQuart(time, startY, distanceY, duration);

    if (time >= duration) {
      clearInterval(timer);
    }
    window.scroll(newX, newY);
  }, 1000 / 60); // 60 fps
};

/******************************************************************************/


/******************************************************************************/



    /* preenche select params: r: id da div custom,n: valor name,d: valor do data-r, ck: nome do cookie, vlat:valor a ser comparado p/ selected, 
    val variavel nome coluna db p/ valor do option, 
    ind: nome coluna db p/ nome do option, fp: parametros para requisição ao db, bnc: p ou c (db central ou do proojeto); 
    call: funcao callback no select; otr: nome da tabela se o callback for a function upsel(); */

function sel(r,se='',d=''){
    //console.log('wds')
    
    var selElmnt;
    var a;
    var b;
    var c;
    var x;
    /*look for any elements with the class "custom-select":*/
     //x = document.getElementsByClassName("custom-selecte");
    
    //console.log('x',x);
    
    //var xcc= Array.prototype.slice.call(x);
    //console.log('xcc',xcc);
    
    var i;
  //  for (i = 0; i < x.length; i++) {
      selElmnt = r;
       selElmnt.style.display ="none";
     /* console.log('selectoptions',selElmnt.options);
      console.log('selectoptions',selElmnt);
      console.log('selectfodinha',selElmnt.length);

      /*for each element, create a new DIV that will act as the selected item:*/
      a = document.createElement("DIV");
      a.setAttribute("class", "selecte-selectede");
      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      se.appendChild(a);
      
       /*for each element, create a new DIV that will contain the option list:*/
      b = document.createElement("DIV");
      b.setAttribute("class", "selecte-items selecte-hide");
      var els = Array.prototype.slice.call(selElmnt.options);
      //console.log('els',els); //<option value="">Selecione</option>
      
      els.forEach((op,j)=>{
        // console.log('selecethide',selElmnt.options);
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = op.innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h;
            s = r;
            h = this.parentNode.previousSibling;
            for (i = 0; i < s.length; i++) {
              if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                r.value = s.options[i].value;
                s.options[i].selected = 'selected';
                
                r.setAttribute('data-v',r.value);
                //console.log('r.value',r.value);
                
                y = this.parentNode.getElementsByClassName("same-as-selectede");
                for (k = 0; k < y.length; k++) {
                  y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selectede");
                if(typeof r.dataset.c != 'undefined' && r.dataset.c != null){
                    var call = r.dataset.c;
                    //r.setAttribute('data-id',selElmnt.id);
                    //console.log('call',call);
                    var xo = eval('('+call+')');
                    //console.log('xo',xo);
                    if(typeof xo != "undefined"){
                        xo();
                    }
                }
                break;
              }
            }
            h.click();
        });
        b.appendChild(c);
      });
    
      se.appendChild(b);
      
      
      a.addEventListener("click", function(e) {
          /*when the select box is clicked, close any other select boxes,
          and open/close the current select box:*/
          e.stopPropagation();
          closeAllSelect(this);
          b.classList.toggle("selecte-hide");
         b.classList.toggle("selecte-arrow-active");
        });
        
      
   // }
    
    function closeAllSelect(elmnt) {
      /*a function that will close all select boxes in the document,
      except the current select box:*/
      var x, y, i, arrNo = [];
      x = document.getElementsByClassName("selecte-items");
      y = document.getElementsByClassName("selecte-selected");
      for (i = 0; i < y.length; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i)
        } else {
          y[i].classList.remove("selecte-arrow-active");
        }
      }
      for (i = 0; i < x.length; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("selecte-hide");
        }
      }
    }
    
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
}

    
function listsel(){
   elementList = document.querySelectorAll('select');
    elementList.forEach(function(r){
        
        if(r.nextSibling == null || r.nextSibling != null && r.nextSibling.className != 'custom-selecte'){
            s = document.createElement("DIV");
            s.setAttribute("class", "custom-selecte");
            s.style.width = "220px";
            s.style.marginLeft = '7px';
            r.after(s)
            
            //console.log('r',r.id,s);
            sel(r,s);
        }
    });
}
var sprl = window.location.toString().split('/');
var c = sprl[sprl.length - 1];

//listsel()
if(c != 'agenda'){
    window.addEventListener("load", listsel,false);
}

/****************************************************/

function getEmprs(){
    coverh();
    var w = new Worker(genesis+'/assets/js/modulo_get.js');
    
    w.postMessage({'ctr':'adm/getEmprs','indice':'empresa','extrair':false});
    
    /*$("#box_emprs").remove();
    $("#print_empresa").html(' ');
    */
    
    arr_names = {'fantasia':'Fantasia','cnpj':'Cnpj','razao_social':'Razão Social','responsavel':'Responsável','telefone':'Telefone','email':'E-mail','endereco':'Enredeço','uf':'Cidade','whatsapp':'WhatsApp','facebook':'Facebook','instagram':'Instagram'};

    if(document.getElementById('box_emprs') === null || document.getElementById('box_emprs').length === 0 ){
    w.onmessage = function(e){
            var url = 'adm/admin';
            var obj = e.data.empresa;
            
            jane('prnt_empr');
            
            $("#prnt_empr").append('<div class="gaf-12 " id="" style="max-width:600px;"><!--div class="gafnm-2"><div class="gaf-12"><div>MENU TESTE</div></div></div--><div class="gafnm-12"><div class="gaf-12"><form method="POST" id="print_empresa"></form></div></div></div>');
            removecover();
            for(var ty=0;ty < obj.length;ty++){
                var arr = obj[ty];
                //console.log('arr',arr);
                
                for(var x in arr_names){
                    var edit = '';

                    if(x == arr.nome){

                        /*
                        if(arr_names[x] == 'Fantasia'){
                            edit = '<div class="fr" style="margin-right: 1%;cursor:pointer;">'+
                                    '<div style="display:none;" id="salv_'+arr.id+'">'+
                                    '<input style="display:none;" type="submit" id="submedite_'+arr.id+'" value="SALVAR" onclick="coverh();enviar_form(\'' + encodeURIComponent('print_empresa') + '\',\'' + url + '\');transfedit2('+arr.id+',\'' + 'salve' + '\',\'' + 'empr' + '\');"><label for="submedite_'+arr.id+'"><img style="width:20px;height:20px;" src="'+genesis+'/assets/imagens/icones/check_mark.svg"></label></div>'+
                                    '<div id="edt_'+arr.id+'" onclick="transfedit2('+arr.id+',\'' + 'edit' + '\');"><img style="width:20px;height:20px;" src="'+genesis+'/assets/imagens/icones/editar_icon.svg"></div></div>';
                    
                        }
                        */
                        
                      // if(document.getElementById('print_empresa') == null){
                        
                        $("#print_empresa").append('<div class="gaf-12 item" style="padding: 4px;" id="empr_list_'+arr.id+'"></div>');

                        $("#empr_list_"+arr.id).append('<div class="" id="empr_box_'+arr.id+'"></div>');
                    
                        
                        $("#empr_box_"+arr.id).append('<div class="gaf-12 form_ret_box" id="'+x+'_empr_'+arr.id+'">');
                        
                        $('#'+x+'_empr_'+arr.id).append('<div class="gaf-12 form_ret_descri"><div class="fl">'+arr_names[x]+':</div> <div class="fl indref  form_ret_val">'+arr.valor+'</div><div class="fl" style="padding-left: 1%;"><input class="inpt_edit inptdit_'+arr.id+'" id="inptp" style="display:none;" type="text" name="'+x+'" value="'+arr.valor+'"></div> '+edit);
                        
                        $('#'+x+'_empr_'+arr.id).append('</div>');
                        
                        
                        
                    }
                }
            }
        }
    }
}

/**************************************************************/

function menlat(){
    $("#menlat").append('<div class="gaf-12"><div class="z-9"><div class="gaf-12"><div style="padding:10px;"><div class="box-outher"><div class="outher-title"><h3>Outros tratamentos</h3></div><div id="Menlt"></div> </div> </div></div> </div></div>');
    var fp = [{}];
    
    fp[0]['categ_prods'] = ['*','',''];
    
    model('get','opGet','p',[{'itens_m':['*',[{'tipo_categ':'servico'}],'']}],'',(e)=>{
        console.log('e',e);
        if(e != false){
            e.forEach((i)=>{
                $("#Menlt").append('<div class="outher-content"><p><a href="'+genesis+'/'+i.url+'">'+i.nome+'</a></p></div>');
            });
            
        }
    });
}

if(document.getElementById("Menlt") != null){
    //menlat();
}
/**************************************************************/



/**************************************************************/


window.addEventListener('load', function() {

var numCa = $('.box-carrossel').length;

for(var p=0;p < numCa;p++){
    
(function(p){

	//número do slide atual (1 porque pega do primeiro e vai incrementando)
	var controller = 0;
    console.log('p',p);
    
	//identifica o número de slides
	var numSlides = $('.teste'+p+' .carrossel .item').length;
    
    var lim = numSlides / 2;
    
    console.log('numSlides',numSlides);
    console.log('lim',lim);
    
	// tempo de transição
	var time = 600;

	//loop que gerencia a troca de slides
	setInterval(function(){
		//se o slide atual não for o último, anima para o próximo
		if(controller <= lim){

			//animação do trilho para o próximo slide
			$('.teste'+p+' .carrossel').animate({
			'margin-left': '-'+controller*300+'px'
			}, time);

			//incrementa a var controller ao passar um slide
			controller ++;
		}
		//se o slide atual for o último, anima para o primeiro
		else{

			//zera o margin-left do trilho de slides (ul)
			$('.teste'+p+' .carrossel').animate({
			'margin-left': '0px'
			}, time/2);

			//volta o controller para 1
			controller = 1;
		}
	}, time+2500);

})(p);

}


});
