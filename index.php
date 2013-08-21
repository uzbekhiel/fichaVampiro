<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<script src='js/jquery-1.3.2.js' type='text/javascript'></script>
<script src='js/padrao.js' type='text/javascript'></script>
<link href='style.css' rel='stylesheet' type='text/css' />
<body>

	<div class="ficha">
		<div class="topo"></div>
        <div class="cabecalho">
            <label for="name" class="label_name">Nome:<input type="text" class="name" id="name" value=""/></label>
            <label for="natureza" class="label_natureza">Natureza:<input type="text" class="natureza" id="natureza" value=""/></label>
            <label for="geracao">Geração:<input type="text" class="geracao" id="geracao" value="" /></label>
            <label for="jogador" class="label_jogador">Jogador:<input type="text" class="jogador" id="jogador" value=""/></label>
            <label for="comportamento" class="label_comportamento">Comportamento:<input type="text" class="comportamento" id="comportamento"value="" /></label>
            <label for="refugio">Refúgio:<input type="text" class="refugio" id="refugio" value="" /></label>
            <label for="cronica" >Crônica:<input type="text" class="cronica" id="cronica" value=""/></label>
            <label for="cla" >Clã:<input type="text" class="cla" id="cla" value=""/></label>
            <label for="conceito">Conceito:<input type="text" class="conceito" id="conceito"  value=""/></label>
        </div>
        <div class="left">
       		<div class="label_attr"></div>
            <div class="atributos1">
                <div class="atributo" id="forca">
                    <label class="forca" >Força </label>
                        <span class="black" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />
                <div class="atributo" id="destreza">
                    <label class="destreza" >Destreza</label>
                        <span class="black" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br /> 
                <div class="atributo" id="vigor">        
                    <label class="vigor" >Vigor</label>
                        <span class="black" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
            </div>
            <div class="label_hab"></div>
            <div class="habilidades1">
                <div class="habilidade" id="prontidao">
                    <label >Prontidão </label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />
                <div class="habilidade" id="esportes">
                    <label >Esportes </label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />
                <div class="habilidade" id="briga">
                    <label >Briga </label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />
                <div class="habilidade" id="esquiva">
                    <label >Esquiva </label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />
                <div class="habilidade" id="empatia">
                    <label >Empatia </label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />
                <div class="habilidade" id="expressao">
                    <label >Expressão </label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />
                <div class="habilidade" id="intimidacao">
                    <label >Intimidação </label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />
                <div class="habilidade" id="lideranca">
                    <label >Liderança </label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />
                <div class="habilidade" id="manha">
                    <label >Manha </label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />
                <div class="habilidade" id="labia">
                    <label >Lábia </label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
            </div>
            <div class="label_vant"></div>
            <div class="vantagens1">
				<?
                $antecedentes = Array('Aliados' , 'Contatos' , 'Fama' , 'Geração' , 'Lacaios' , 'Rebanho' , 'Mentor' , 'Influência' , 'Recursos' , 'Status');
                for($i=0;$i<7;$i++){ ?>
                    <div class="antecedente" id="antecedente<?= $i?>">
                        <select style="width:100px;" class="antecedentes" id="<?= $i?>">
                            <option  value="0">Selecione um</option>
                            <? $x = 0; foreach($antecedentes as $valor){?>
                                <option value="<?= $valor?>"><?= $valor?></option>
                            <? $x++;}?>
                        </select>
                            <span class="white" id="1_<?= $i?>"></span>
                            <span class="white" id="2_<?= $i?>"></span>
                            <span class="white" id="3_<?= $i?>"></span>
                            <span class="white" id="4_<?= $i?>"></span>
                            <span class="white" id="5_<?= $i?>"></span>
                    </div>
                    <br />
                <? } ?>
            </div>
            <div class="bar"></div>
            <div class="label_q"></div>
            <div class="qualidades1">
				<!--<textarea name="qualidades" cols="25" rows="8" style="table-layout:auto" ></textarea>-->
                <select multiple id="select1">  
                   <option value="1">Option 1</option>  
                   <option value="2">Option 2</option>  
                   <option value="3">Option 3</option>  
                   <option value="4">Option 4</option>  
                  </select>  
                  <a href="#" id="add">add &gt;&gt;</a>  
                 </div>  
                 <div>  
                 <select multiple id="select2"></select>  
                  <a href="#" id="remove">&lt;&lt; remove</a>
                <br/>
                <input name="pt_bonus" id="pt_bonus" type="text" value="15" maxlength="2" style="width:20px;" />
            </div>
        </div>
        <div class="middle">
            <div class="atributos2">
                <div class="atributo" id="carisma">
                    <label  class="carisma" >Carisma</label>
                        <span class="black" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br /> 
                <div class="atributo" id="manipulacao">
                    <label  class="manipulacao">Manipulação</label>
                        <span class="black" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br /> 
                <div class="atributo" id="aparencia">
                    <label  class="aparencia" >Aparência</label>
                        <span class="black" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
            </div>
            <div class="habilidades2">
                <div class="habilidade" id="empatia_animais">
                    <label class="empatia_animais" >Empatia c/ Animais</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>        
                <br />
                <div class="habilidade" id="oficios">
                    <label class="oficios" >Ofícios</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>        
               <br />
                <div class="habilidade" id="conducao">
                    <label class="conducao" >Condução</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>        
                <br />
                <div class="habilidade" id="etiqueta">
                    <label class="etiqueta" >Etiqueta</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>        
                <br />
                <div class="habilidade" id="armas_fogo">
                    <label class="armas_fogo" >Armas de Fogo</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>        
                <br />
                <div class="habilidade" id="armas_brancas">
                    <label class="armas_brancas" >Armas Brancas</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>        
                <br />
                <div class="habilidade" id="performance">
                    <label class="performance" >Performance</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>        
                <br />
                <div class="habilidade" id="seguranca">
                    <label class="serguranca" >Segurança</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>        
                <br />
                <div class="habilidade" id="furtividade">
                    <label class="furtividade" >Furtividade</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>        
                <br />
                <div class="habilidade" id="sobrevivencia">
                    <label class="sobrevivencia" >Sobrevivência</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
            </div>
            <div class="vantagens2">
				<? 
                $disciplinas = Array('Animalismo', 'Auspícios', 'Rapidez', 'Quimerismo' , 'Demência' , 'Dominação' , 'Fortitude' , 'Ofuscação' , 'Tenebrosidade' , 'Potência' , 'Presença' , 'Metamorfose' , 'Quietus' , 'Serpentis' , 'Vicissitude' , 'Taumaturgia' , 'Necromancia');
                for($i=0;$i<7;$i++){ ?>
                    <div class="disciplina" id="disciplina<?= $i?>">
                        <select style="width:100px;" class="disciplinas" id="<?= $i?>" >
                            <option selected="selected" value="0">Selecione uma </option>
                            <? foreach($disciplinas as $valor){?>
                                <option value="<?= $valor?>"><?= $valor?></option>
                            <? }?>
                        </select>
                            <span class="white" id="1_<?= $i?>"></span>
                            <span class="white" id="2_<?= $i?>"></span>
                            <span class="white" id="3_<?= $i?>"></span>
                            <span class="white" id="4_<?= $i?>"></span>
                            <span class="white" id="5_<?= $i?>"></span>
                    </div>
                    <br />
                <? } ?>
            </div>
            <div class="qualidades2">
				<?
                $trilhas = Array('Humanidade' , 'Trilha do Sangue' , 'Trilha dos Ossos' , 'Trilha da Noite' , 'Trilha da Metamorfose' , 'Trilha do Paradoxo' , 'Trilha de Typhon');
                ?>
                <div class="trilha" id="trilha">
                    <select style="width:200px;" class="trilha" id="<?= $i?>">
                        <? foreach($trilhas as $valor){?>
                            <option value="<?= $valor?>"><?= $valor?></option>
                        <? }?>
                    </select>
                        <span class="white" id="1_<?= $i?>"></span>
                        <span class="white" id="2_<?= $i?>"></span>
                        <span class="white" id="3_<?= $i?>"></span>
                        <span class="white" id="4_<?= $i?>"></span>
                        <span class="white" id="5_<?= $i?>"></span>
                        <span class="white" id="6_<?= $i?>"></span>
                        <span class="white" id="7_<?= $i?>"></span>
                        <span class="white" id="8_<?= $i?>"></span>
                        <span class="white" id="9_<?= $i?>"></span>
                        <span class="white" id="10_<?= $i?>"></span>
                 </div>
                 <div class="forca_de_vontade"></div>
                 <div class="will" id="forca_vontade">
                    <span class="white" id="1"></span>
                    <span class="white" id="2"></span>
                    <span class="white" id="3"></span>
                    <span class="white" id="4"></span>
                    <span class="white" id="5"></span>
                    <span class="white" id="6"></span>
                    <span class="white" id="7"></span>
                    <span class="white" id="8"></span>
                    <span class="white" id="9"></span>
                    <span class="white" id="10"></span>                        
                </div>
                <div class="will2">
                    <span class="quadrado"></span>
                    <span class="quadrado"></span>
                    <span class="quadrado"></span>
                    <span class="quadrado"></span>
                    <span class="quadrado"></span>
                    <span class="quadrado"></span>
                    <span class="quadrado"></span>
                    <span class="quadrado"></span>
                    <span class="quadrado"></span>
                    <span class="quadrado"></span>
                </div>
                <div class="sangue"></div>
        	</div>
        </div>
        <div class="right">
            <div class="atributos3">
                <div class="atributo" id="percepcao">
                    <label for="percepcao" class="percepcao">Percepção</label>
                        <span class="black" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />
                <div class="atributo" id="inteligencia">
                    <label for="inteligencia" class="inteligencia">Inteligência</label>
                        <span class="black" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />
                <div class="atributo" id="raciocinio">        
                    <label for="raciocinio" class="raciocinio">Raciocínio</label>
                        <span class="black" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                 </div>
            </div>
            <div class="habilidades3">       
                <div class="habilidade" id="academicos">
                    <label class="academicos">Acadêmicos</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                 <br />        
                <div class="habilidade" id="computador">
                    <label class="computador">Computador</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />        
                <div class="habilidade" id="financas">
                    <label class="financas">Finanças</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div> 
                <br />        
                <div class="habilidade" id="investigacao">
                    <label class="investigacao">Investigação</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />        
                <div class="habilidade" id="direito">
                    <label class="direito">Direito</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />        
                <div class="habilidade" id="linguistica">
                    <label class="linguistica">Linguística</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br/>       
                <div class="habilidade" id="medicina">
                    <label class="medicina">Medicina</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />        
                <div class="habilidade" id="ocultismo">
                    <label class="ocultismo">Ocultismo</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />       
                <div class="habilidade" id="politica">
                    <label class="politica">Política</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
                <br />        
                <div class="habilidade" id="ciencia">
                    <label class="ciencia">Ciência</label>
                        <span class="white" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
            </div>
            <div class="vantagens3">
                <div class="virtude" id="consciencia">
                    <label class="consciencia" >Consciência</label>
                        <span class="black" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>        
                <br />
                <label class="conviccao" >Convicção</label>
                <br />
                <div class="virtude" id="autocontrole">
                    <label class="autocontrole" >Autocontrole</label>
                        <span class="black" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>        
                <br />
                <label class="instintos" >Instintos</label>
                <br />
                <div class="virtude" id="coragem">
                    <label class="coragem" >Coragem</label>
                        <span class="black" id="1"></span>
                        <span class="white" id="2"></span>
                        <span class="white" id="3"></span>
                        <span class="white" id="4"></span>
                        <span class="white" id="5"></span>
                </div>
            </div>
            <div class="qualidades3">
            	<div class="vitalidade"></div>
            </div>
        </div>
	</div>
    <div  class="btn_pdf" onclick="" style="cursor:pointer;position:absolute;"> pdf </div>
</body>
</html>