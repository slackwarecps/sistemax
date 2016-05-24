<?

#ini_set("display_errors", 1 );
#error_reporting(E_ALL);

	$op = (isset($_GET['op'])) ? $_GET['op'] : null;
	$op2 = (isset($_GET['op2'])) ? $_GET['op2'] : null;
	
	if ($op=='lab_rtm')
	{
		if ($op2=='')
		{
			if ($menu[lab_rtm] >= 1)
			{
			?>
			<a class="box_home" href="index.php?op=lab_rtm&op2=new_rtm">Nova RTM<br /><br /><br />
			<img src="imagens/icones/novo.gif" title="Nova RTM" border="0" /></a>
			<?
			}
			if ($menu[lab_rtm] >= 1)
			{
              if ($_SESSION['especialidade'] == "engenheiro_quimico")
              $link='index.php?op=lab_rtm&op2=lis_rtm&op3=esp_eng';
              else
              $link='index.php?op=lab_rtm&op2=lis_rtm';
              if ($_SESSION['especialidade'] == "quimico_cqpd")
              $link='index.php?op=lab_rtm&op2=lis_rtm&tipo_rtm=aberto';
			?>
            <a class="box_home" href="<?php echo $link;?>">Listar RTM<br /><br /><br />
			<img src="imagens/icones/listar.gif" title="Listar RTM" border="0" /></a>		
			<?
			}
			if ($menu[lab_rtm] >= 4)
			{	
			?>					
			<a class="box_home" href="index.php?op=lab_rtm&op2=con_rtm">Consulta RTM<br /><br /><br />
			<img src="imagens/icones/pasta1.gif" title="Listar RTM" border="0" /></a>			
			<?
			}
			
		}
		else
		{
			switch($op2)
			{
				case "new_rtm":
				$arq2 = "rt/nin_form_rt.php";
				break;
				
				case "lis_rtm":
				$arq2 = "rt/nin_busca.php";
				break;
				
				case "lis_rtm_c":
				$arq2 = "rt/nin_busca2.php";
				break;
				
				case "con_rtm":
				$arq2 = "rt/nin_formbusca.php";
				break;
				
				case "ver_rtm":
				$arq2 = "rt/nin_viewrtm_dentro.php";
				break;
				
				
			}
			
			include ($arq2);
			
		}		

	}


	else if ($op=='lab_sdp')
	{
		if ($op2=='')
		{
			if ($menu[lab_sdp] == 4)
			{
			?>
			<a class="box_home" href="index.php?op=lab_sdp&op2=form">Nova SDP<br /><br /><br />
			<img src="imagens/icones/novo.gif" title="Nova SDP" border="0" /></a>
			<?
			}
			if ($menu[lab_sdp] >= 1)
			{
			?>
			<a class="box_home" href="index.php?op=lab_sdp&op2=lis_sdp">Listar SDP<br /><br /><br />
			<img src="imagens/icones/listar.gif" title="Listar SDP" border="0" /></a>		
			<?
			}

		}
		else
		{
			switch($op2)
			{
				case "form":
				$arq2 = "sdp/form.php";
				break;
				
				case "lis_sdp":
				$arq2 = "sdp/lista.php";
				break;
			
				
			}
			
			include ($arq2);
			
		}		

	}
	
	
	
	else if ($op=='adm_func')
	{
		if ($op2=='')
		{
			if ($menu[adm_func] >= 1)
			{
			?>
			<a class="box_home" href="index.php?op=adm_func&op2=form">Novo Usuário<br /><br /><br />
			<img src="imagens/icones/addUser.png" title="Novo Usuario do Sistema" border="0" /></a>
			<?
			}
			if ($menu[adm_func] >= 1)
			{
			?>
			<a class="box_home" href="index.php?op=adm_func&op2=lis_func">Listar Usuários<br /><br /><br />
			<img src="imagens/icones/listar.gif" title="Listar SDP" border="0" /></a>		
			<?
			}

		}
		else
		{
			switch($op2)
			{
				case "form":
				$arq2 = "incluirusuario.php";
				break;
				
				case "lis_func":
				$arq2 = "adm/lista_func.php";
				break;
			
				
			}
			
			include ($arq2);
			
		}		

	}




	else if ($op=='ven_ctt')
	{
		if ($op2=='')
		{
			if ($menu[ven_ctt] >= 1)
			{
			?>
			<a class="box_home" href="index.php?op=ven_ctt&op2=frm_ctt">Novo Contato<br /><br /><br />
			<img src="imagens/icones/clientes.gif" title="Listar RTM" border="0" />
			</a>
			<?
			}
			if ($menu[ven_ctt] >= 1)
			{
			?>			
			<a class="box_home" href="index.php?op=ven_ctt&op2=lis_ctt&id=<?php echo $_SESSION['especialidade_vendas'];?>">Listar Contatos<br /><br /><br />
			<img src="imagens/icones/usuarios.gif" title="Novo Contato" border="0" />
			</a>
			<?
			}			
		}
		else
		{
			switch($op2)
			{
				//mkt contatos
				case "lis_ctt":
				$arq2 = "mkt/lista.php";
				break;
			
				//mkt contatos formulario
				case "frm_ctt":
				$arq2 = "mkt/form_cad.php";
				break;
			
			}
			
			include ($arq2);
			
		}		

	}	
	

	else if ($op=='fat_dup')
	{
		if ($op2=='')
		{
			if ($menu[fat_dup] >= 4)
			{
			?>
			<a class="box_home" href="index.php?op=fat_dup&op2=frm_dup">Inserir Duplicata<br /><br /><br />
			<img src="imagens/icones/novo.gif" title="Inserir Duplicata" border="0" /></a>
			<?
			}
			if ($menu[fat_dup] >= 1)
			{
			?>
			<a class="box_home" href="index.php?op=fat_dup&op2=lis_dup">Listar Duplicatas<br /><br /><br />
			<img src="imagens/icones/listar.gif" title="Listar Duplicatas" border="0" /></a>			
			<?
			}
		}
		else
		{
			switch($op2)
			{
				case "frm_dup":
				$arq2 = "fat/form_faturamento.php";
				break;
			
				case "lis_dup":
				$arq2 = "fat/lista_duplicatas_estagio1.php";
				break;
			
			}
			
			include ($arq2);
			
		}		

	}	
	
	else if ($op=='rh_sfun')
	{
		if ($op2=='')
		{
			if ($menu['rh_sfun'] == 4)
			{
			?>		
			<a class="box_home" href="index.php?op=rh_sfun&op2=frm_car">Novo Cargo<br /><br /><br />
			<img src="imagens/icones/ferramentas.gif" title="Novo Cargo" border="0" /></a>
			<?
			}
			if ($menu['rh_sfun'] >= 1)
			{
			?>
			<a class="box_home" href="index.php?op=rh_sfun&op2=lis_car">Listar Cargos<br /><br /><br />
			<img src="imagens/icones/listar.gif" title="Listar Cargos" border="0" /></a>	
			<?
			}
			if ($menu['rh_sfun'] >= 1)
			{
			?>
			<a class="box_home" href="index.php?op=rh_sfun&op2=frm_fun">Novo Funcionário<br /><br /><br />
			<img src="imagens/icones/clientes.gif" title="Novo Funcionário" border="0" /></a>	
			<?
			}
			if ($menu['rh_sfun'] >= 1)
			{
			?>			
			<a class="box_home" href="index.php?op=rh_sfun&op2=lis_fun">Listar Funcionários<br /><br />
			<img src="imagens/icones/usuarios.gif" title="Listar Funcionários" border="0" /></a>									
			<?
			}
		}
		else
		{
			switch($op2)
			{
				case "frm_car":
				$arq2 = "rh/form_cad_cargo.php";
				break;
			
				case "lis_car":
				$arq2 = "rh/lista_cargo.php";
				break;
			
				case "frm_fun":
				$arq2 = "rh/form_cad.php";
				break;
			
				case "lis_fun":
				$arq2 = "rh/lista.php";
				break;	
				
				case "lis_fun_com":
				$arq2 = "rh/lista_completa.php";
				break;					
				
			}
			
			include ($arq2);
			
		}		

	}		
	
	
	else if ($op=='rh_vt')
	{
		if ($op2=='')
		{
			if ($menu[rh_vt] >= 1)
			{
?>
			<a class="box_home" href="home.php?op=rh_vt&op2=1" target="_blank">Empresa 01<br /><br /><br />
			<img src="imagens/icones/empresa.gif" title="Empresa 01" border="0" /></a>
			<?
			}
			if ($menu[rh_vt] >= 1)
			{
			?>	
			<a class="box_home" href="home.php?op=rh_vt&op2=2" target="_blank">Empresa 02<br /><br /><br />
			<img src="imagens/icones/empresa.gif" title="Empresa 02" border="0" /></a>	
			<?
			}
			if ($menu[rh_vt] >= 1)
			{
			?>	
			<a class="box_home" href="home.php?op=rh_vt&op2=3" target="_blank">Empresa 03<br /><br /><br />
			<img src="imagens/icones/empresa.gif" title="Empresa 03" border="0" /></a>	
			<?
			}
		}
		else
		{
			$arq2 = "ifx/lista_func_vale_transporte.php";
			include ($arq2);
		}	

	}		

	
	else if ($op=='ac_rel')
	{
		
	
		if ($op2=='')
		{
			
			
			if ($menu[ac_rel] >= 1)
			{
			?>		
			<a class="box_home" href="index.php?op=ac_rel&op2=rel_pes">Pessoas na Empresa<br /><br />
			<img src="imagens/icones/empresa.gif" title="Pessoas na Empresa" border="0" /></a>
			<?
			}
			if ($menu[ac_rel] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=ac_rel&op2=mov_fun">Movimentação de Funcionários<br /><br />
			<img src="imagens/icones/usuarios.gif" title="Movimentação de Funcionários" border="0" /></a>	
			<?
			}
			if ($menu[ac_rel] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=ac_rel&op2=mov_vis">Movimentação de Visitantes<br /><br />
			<img src="imagens/icones/contatos_feiras.gif" title="Movimentação de Visitantes" border="0" /></a>	
			<?
			}
			if ($menu[ac_rel] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=ac_rel&op2=pes_emp">Pessoas por Empresa<br /><br />
			<img src="imagens/icones/clientes.gif" title="Pessoas por Empresa" border="0" /></a>	
			<?
			}
			if ($menu[ac_rel] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=ac_rel&op2=pes">Pessoas<br /><br /><br />
			<img src="imagens/icones/clientes.gif" title="Pessoas" border="0" /></a>	
			<?
			}
			if ($menu[ac_rel] >= 1)
			{
			?>									
			<a class="box_home" href="index.php?op=ac_rel&op2=lis_vis">Visitas Agendadas<br /><br />
			<img src="imagens/icones/contatos_feiras.gif" title="Visitas Agendadas" border="0" /></a>	
			<?
			}
			if ($menu[ac_rel] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=ac_rel&op2=lis_ent">Entrevistas Agendadas<br /><br />
			<img src="imagens/icones/entrevista.gif" title="Entrevistas Agendadas" border="0" /></a>															
			<?
			}
		}
		else
		{
			switch($op2)
			{
				case "rel_pes":
				$arq2 = "ac/rel_pes_na_empresa.php";
				break;
			
				case "mov_fun":
				$arq2 = "ac/mov_fun.php";
				break;
			
				case "mov_vis":
				$arq2 = "ac/mov_vis.php";
				break;
			
				case "pes_emp":
				$arq2 = "ac/lis_pes_por_emp.php";
				break;	
				
				case "pes":
				$arq2 = "ac/lis_todas_pes.php";
				break;					
								
				case "lis_vis":
				$arq2 = "ac/lis_vis.php";
				break;					
								
				case "lis_ent":
				$arq2 = "ac/lis_entr.php";
				break;					
				
			}
			
			include ($arq2);
			
		}		

	}		
	
	
	
	else if ($op=='ac_cad')
	{
		if ($op2=='')
		{
			

			if ($menu[ac_cad] >= 4)
			{
			?>				
			<a class="box_home" href="index.php?op=ac_cad&op2=emp">Empresas<br /><br /><br />
			<img src="imagens/icones/empresa.gif" title="Empresas" border="0" /></a>
			<?
			}
			if ($menu[ac_cad] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=ac_cad&op2=pes">Pessoas<br /><br /><br />
			<img src="imagens/icones/usuarios.gif" title="Pessoas" border="0" /></a>
			<?
			}
			if ($menu[ac_cad] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=ac_cad&op2=vis">Visitas<br /><br /><br />
			<img src="imagens/icones/contatos_feiras.gif" title="Visitas" border="0" /></a>	
			<?
			}
			if ($menu[ac_cad] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=ac_cad&op2=ent">Entrevistas<br /><br /><br />
			<img src="imagens/icones/entrevista.gif" title="Entrevistas" border="0" /></a>	
			<?
			}
			if ($menu[ac_cad] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=ac_cad&op2=edi_emp">Editar Empresa<br /><br /><br />
			<img src="imagens/icones/empresa.gif" title="Editar Empresa" border="0" /></a>	
			<?
			}
			if ($menu[ac_cad] >= 4)
			{
				$param_portaria_edita_func = isset($_SESSION['param_portaria_edita_func'])?$_SESSION['param_portaria_edita_func']:null;
				if ($param_portaria_edita_func=='S'){
					echo '<a class="box_home" href="index.php?op=ac_cad&op2=edi_fun">Editar Funcionário<br /><br />';
					echo '<img src="imagens/icones/clientes.gif" title="Editar Funcionário" border="0" /></a>';	
				}else{
					echo '<a class="box_home" href="index.php?op=ac_cad&op2=edi_fun">Consultar Funcionário<br /><br />';
					echo '<img src="imagens/icones/clientes.gif" title="Editar Funcionário" border="0" /></a>';						
				}
			}
			if ($menu[ac_cad] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=ac_cad&op2=edi_pes">Editar Pessoa<br /><br /><br />
			<img src="imagens/icones/clientes.gif" title="Editar Pessoa" border="0" /></a>	
			<?
			}
		}
		else
		{
			switch($op2)
			{
				case "emp":
				$arq2 = "ac/cad_empresas.php";
				break;
			
				case "pes":
				$arq2 = "ac/cad_pessoas.php";
				break;
				
				case "vei":
				$arq2 = "ac/cad_veiculo.php";
				break;

				case "ent":
				$arq2 = "ac/cad_entrev.php";
				break;

				case "vis":
				$arq2 = "ac/cad_visita.php";
				break;
			
				case "edi_emp":
				$arq2 = "ac/edi_empresa.php";
				break;

			
				case "edi_fun":
				$arq2 = "ac/edi_funcio.php";
				break;	
				
				case "edi_pes":
				$arq2 = "ac/edi_pessoas.php";
				break;					
			
			}
			
			include ($arq2);
			
		}		

	}		
	

	else if ($op=='ac_mov')
	{
		if ($op2=='')
		{
			if ($menu[ac_mov] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=ac_mov&op2=es_magic">Entrada e Saída - Rápido<br /><br />
			<img src="imagens/icones/i_entrada_saida.gif" title="Entrada e Saída - Rápido" border="0" /></a>
			<?
			}
			if ($menu[ac_mov] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=ac_mov&op2=ent_pes&op3=p">Entrada de Pessoas<br /><br />
			<img src="imagens/icones/usuarios.gif" title="Enrada de Pessoas" border="0" /></a>	
			<?
			}
			if ($menu[ac_mov] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=ac_mov&op2=ent_fun&op3=f">Entrada de Funcionários<br /><br />
			<img src="imagens/icones/clientes.gif" title="Enrada de Funcionários" border="0" /></a>	
			<?
			}
			if ($menu[ac_mov] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=ac_mov&op2=sai_pes&op3=p">Saída de Pessoas<br /><br />
			<img src="imagens/icones/usuarios.gif" title="Saída de Pessoas" border="0" /></a>	
			<?
			}
			if ($menu[ac_mov] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=ac_mov&op2=sai_fun&op3=f">Saída de Funcionários<br /><br />
			<img src="imagens/icones/clientes.gif" title="Saída de Funcionários" border="0" /></a>	
			<?
			}
		}
		else
		{
			switch($op2)
			{
				case "es_magic":
				$arq2 = "ac/lis_mov_fun.php";
				break;
			
				case "ent_pes":
				$arq2 = "ac/entrada_pessoas.php";
				break;
			
				case "ent_fun":
				$arq2 = "ac/entrada_pessoas.php";
				break;
				
				case "ent_proc":
				$arq2 = "ac/form_procedimento.php";
				break;
			
				case "sai_pes":
				$arq2 = "ac/saida_pessoas.php";
				break;	
				
				case "sai_fun":
				$arq2 = "ac/saida_pessoas.php";
				break;					
										
				
			}
			
			include ($arq2);
			
		}		

	}
	
	
	else if ($op=='rp_bib')
	{
		if ($op2=='')
		{
			if ($menu[rp_bib] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=rp_bib&op2=bib_lis">Listar Livros<br /><br /><br />
			<img src="imagens/icones/livro.gif" title="Entrada e Saída - Rápido" border="0" /></a>
			<?
			}
			if ($menu[rp_bib] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=rp_bib&op2=bib_novo">Novo Livro<br /><br /><br />
			<img src="imagens/icones/novo.gif" title="Enrada de Pessoas" border="0" /></a>	
			<?
			}
			if ($menu[rp_bib] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=rp_bib&op2=bib_mov">Movimentação<br /><br /><br />
			<img src="imagens/icones/i_entrada_saida.gif" title="Enrada de Funcionários" border="0" /></a>		
			<?
			}
		}
		else
		{
			switch($op2)
			{
				case "bib_lis":
				$arq2 = "rp/bib.php";
				break;
			
				case "bib_novo":
				$arq2 = "rp/form_bib.php";
				break;
			
				case "bib_mov":
				$arq2 = "rp/mov_bib.php";
				break;			
			}
			
			include ($arq2);
			
		}		

	}
	
	
	
	
	else if ($op=='sut_ch')
	{
		if ($op2=='')
		{
			if ($menu[sut_ch] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=sut_ch&op2=novo_ch">Abrir Novo Chamado<br /><br />
			<img src="imagens/icones/novo.gif" title="Abrir Novo Chamado" border="0" /></a>	
			<?
			}
			if ($menu[sut_ch] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=sut_ch&op2=lis_ch">Ver Chamados<br /><br /><br />
			<img src="imagens/icones/listar.gif" title="Ver Chamados" border="0" /></a>
			<?
			}
		}
		else
		{
			switch($op2)
			{
				case "lis_ch":
				$arq2 = "sut/lis_ch.php";
				break;
			
				case "novo_ch":
				$arq2 = "sut/novo_ch.php";
				break;
			}
			
			include ($arq2);
			
		}		

	}	
	



	else if ($op=='sup_mcf')
	{
		if ($op2=='')
		{
			if ($menu[sup_mcf] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=sup_mcf&op2=cad_forn">Cadastrar Fornecedor<br /><br />
			<img src="imagens/icones/novo.gif" title="Cadastrar Fornecedor" border="0" /></a>
			<?
			}
			if ($menu[sup_mcf] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=sup_mcf&op2=lis_forn">Listar Fornecedor<br /><br />
			<img src="imagens/icones/clientes.gif" title="Listar Fornecedor" border="0" /></a>	
			<a class="box_home" href="index.php?op=sup_mcf&op2=lis_forn&tipo_rel=inativos">Fornecedores inativos<br /><br />
			<img src="imagens/icones/clientes.gif" title="Listar Fornecedor inativos" border="0" /></a>	
			<?
			}
			if ($menu[sup_mcf] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=sup_mcf&op2=cad_lic">Cadastrar Licenças<br /><br />
			<img src="imagens/icones/listar.gif" title="Cadastrar Licenças" border="0" /></a>	
			<?
			}
	
		}
		else
		{
			switch($op2)
			{
				case "cad_forn":
				$arq2 = "sup/mcf_fornecedor.php";
				break;
			
				case "lis_forn":
				$arq2 = "sup/mcf_fornecedor.php";
				break;
			
				case "cad_lic":
				$arq2 = "sup/mcf_licenca.php";
				break;

				case "cad_licemp":
				$arq2 = "sup/mcf_lic_emp.php";
				break;
				
				case "pont":
				$arq2 = "sup/mcf_pontuacao.php";
				break;
				
			}
			
			include ($arq2);
			
		}		

	}
	
	
    // Suprimentos > Ctrl. Transportadoras 
	else if ($op=='sup_ctf')
	{
		if ($op2=='')
		{
			if ($menu[sup_ctf] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=sup_ctf&op2=cad_tran">Cadastrar Transportadora<br /><br /><br />
			<img class="cadastro" src="imagens/transp.png" title="Cadastrar Transportadora" border="0" /></a>
            <a class="box_home" href="index.php?op=sup_ctf&op2=cad_lic">Cadastrar Licenças<br /><br /><br />
			<img class="cadastro" src="imagens/transp.png" title="Cadastrar Licenças" border="0" /></a>	            
			<?
			}
			if ($menu[sup_ctf] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=sup_ctf&op2=lis_tran">Listar Transportadora<br /><br /><br />
			<img class="listar" src="imagens/transp.png" title="Listar Transportadora" border="0" /></a>
			<a class="box_home" href="index.php?op=sup_ctf&op2=lis_tran&tipo_rel=inativos">Listar Transportadoras inativas<br /><br />
			<img  class="listar" src="imagens/transp.png" title="Listar Transportadoras inativas" border="0" /></a>            			
			
			<?
			}
		}
		else
		{
			switch($op2)
			{
				case "cad_tran":
				$arq2 = "sup/ctf_transportadora.php";
				break;
			
				case "lis_tran":
				$arq2 = "sup/ctf_transportadora.php";
				break;
			
				case "cad_lic":
				$arq2 = "sup/ctf_licenca.php";
				break;

				case "cad_licemp":
				$arq2 = "sup/ctf_lic_emp.php";
				break;
				
				case "pont":
				$arq2 = "sup/ctf_pontuacao.php";
				break;
				
			}
			
			include ($arq2);
			
		}		

	}
	

	else if ($op=='sup_cat')
	{
		if ($op2=='')
		{
			if ($menu[sup_cat] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=sup_cat&op2=cad_ati">Cadastrar Ativos<br /><br /><br />
			<img src="imagens/icones/novo.gif" title="Cadastrar Ativos" border="0" /></a>
			<?
			}
			if ($menu[sup_cat] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=sup_cat&op2=lis_ati">Listar Ativos<br /><br /><br />
			<img src="imagens/icones/ativos.gif" title="Listar Ativos" border="0" /></a>	
			<?
			}
			if ($menu[sup_cat] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=sup_cat&op2=cad_cat">Cadastrar Categorias<br /><br />
			<img src="imagens/icones/novo.gif" title="Cadastrar Categorias" border="0" /></a>	
			<?
			}
			if ($menu[sup_cat] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=sup_cat&op2=lis_cat">Listar Categorias<br /><br /><br />
			<img src="imagens/icones/pasta2.gif" title="Listar Categorias" border="0" /></a>	
			<?
			}
		
		}
		else
		{
			switch($op2)
			{
				case "cad_ati":
				$arq2 = "sup/cat_ativo.php";
				break;
			
				case "lis_ati":
				$arq2 = "sup/cat_ativo.php";
				break;
			
				case "cad_cat":
				$arq2 = "sup/cat_categoria.php";
				break;

				case "lis_cat":
				$arq2 = "sup/cat_categoria.php";
				break;
				
			}
			
			include ($arq2);
			
		}		

	}
	


	else if ($op=='sup_cfr')
	{
		if ($op2=='')
		{
			if ($menu[sup_cfr] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=sup_cfr&op2=cad_fro">Cadastrar Automovel<br /><br />
			<img src="imagens/icones/usuarios.gif" title="Cadastrar Automovel" border="0" /></a>
			<?
			}
			if ($menu[sup_cfr] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=sup_cfr&op2=lis_fro">Listar Automóvel<br /><br />
			<img src="imagens/icones/clientes.gif" title="Listar Automovel" border="0" /></a>	
			<?
			}
		}
		else
		{
			switch($op2)
			{
				case "cad_fro":
				$arq2 = "sup/cfr_frota.php";
				break;
			
				case "lis_fro":
				$arq2 = "sup/cfr_frota.php";
				break;
			
			}
			
			include ($arq2);
			
		}		

	}
	

	
	else if ($op=='sut_rm')
	{
		if ($op2=='')
		{
			if ($menu[sut_rm] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=sut_rm&op2=rm_novo">Nova<br /><br /><br />
			<img src="imagens/icones/novo.gif" title="Entrada e Saída - Rápido" border="0" /></a>
			<?
			}
			if ($menu[sut_rm] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=sut_rm&op2=rm_lis">Listar<br /><br /><br />
			<img src="imagens/icones/listar.gif" title="Enrada de Pessoas" border="0" /></a>	
			<?
			}
		}
		else
		{
			switch($op2)
			{
				case "rm_novo":
				$arq2 = "sut/rm_form.php";
				break;
			
				case "rm_lis":
				$arq2 = "sut/rm_listar.php";
				break;		
			}
			
			include ($arq2);
			
		}		

	}
	
	
	
	else if ($op=='sig_sa')
	{
		if ($op2=='')
		{
			if ($menu[sig_sa] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=sig_sa&op2=form">Nova<br /><br /><br />
			<img src="imagens/icones/novo.gif" title="Entrada e Saída - Rápido" border="0" /></a>
			<?
			}
			if ($menu[sig_sa] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=sig_sa&op2=list">Listar<br /><br /><br />
			<img src="imagens/icones/listar.gif" title="Enrada de Pessoas" border="0" /></a>	
			<?
			}
		}
		else
		{
			switch($op2)
			{
				case "form":
				$arq2 = "sig/sa_form.php";
				break;
			
				case "list":
				$arq2 = "sig/sa_lista.php";
				break;		
			}
			
			include ($arq2);
			
		}		

	}
	
	
	
	
	
	else if ($op=='sig_doc')
	{
		if ($op2=='')
		{
			if ($menu[sig_doc] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=sig_doc&op2=lis&tabela2=ancritica">Análise Crítica<br /><br /><br />
			<img src="imagens/icones/listar.gif" title="Alálise Crítica" border="0" /></a>
			
			<a class="box_home" href="index.php?op=sig_doc&op2=lis&tabela2=programa5s">Programa 5 S<br /><br /><br />
			<img src="imagens/icones/listar.gif" title="Programa 5 S" border="0" /></a>	
			
			<a class="box_home" href="index.php?op=sig_doc&op2=lis&tabela2=ata">Comit&ecirc; Ambiental<br /><br /><br />
			<img src="imagens/icones/listar.gif" title="Comit&ecirc; Ambiental" border="0" /></a>
			
			<a class="box_home" href="index.php?op=sig_doc&op2=lis&tabela2=auditoria">Auditoria<br /><br /><br />
			<img src="imagens/icones/listar.gif" title="Auditoria" border="0" /></a>	
			
			<a class="box_home" href="index.php?op=sig_doc&op2=lis&tabela2=formulario">Formul&aacute;rios<br /><br /><br />
			<img src="imagens/icones/listar.gif" title="Formul&aacute;rios" border="0" /></a>
			
			<a class="box_home" href="index.php?op=sig_doc&op2=lis&tabela2=indicadores">Indicadores<br /><br /><br />
			<img src="imagens/icones/listar.gif" title="Indicadores" border="0" /></a>	
			
			<a class="box_home" href="index.php?op=sig_doc&op2=lis&tabela2=instrucao">Instru&ccedil;&otilde;es de Trabalho<br /><br />
			<img src="imagens/icones/listar.gif" title="Instru&ccedil;&otilde;es de Trabalho" border="0" /></a>
			
			<a class="box_home" href="index.php?op=sig_doc&op2=lis&tabela2=manual">Manuais<br /><br /><br />
			<img src="imagens/icones/listar.gif" title="Manuais" border="0" /></a>	
			
			<a class="box_home" href="index.php?op=sig_doc&op2=lis&tabela2=monitoramento">Monitoramento<br /><br /><br />
			<img src="imagens/icones/listar.gif" title="Monitoramento" border="0" /></a>	
			
			<a class="box_home" href="index.php?op=sig_doc&op2=lis&tabela2=plano">Brigada de Emerg&ecirc;ncia<br /><br />
			<img src="imagens/icones/listar.gif" title="Brigada de Emerg&ecirc;ncia" border="0" /></a>	
		
			<a class="box_home" href="index.php?op=sig_doc&op2=lis&tabela2=procedimento">Procedimentos<br /><br /><br />
			<img src="imagens/icones/listar.gif" title="Procedimentos" border="0" /></a>	
		
			<a class="box_home" href="index.php?op=sig_doc&op2=lis&tabela2=docs_externos">Documentos Externos<br /><br />
			<img src="imagens/icones/listar.gif" title="Documentos Externos" border="0" /></a>		
			<?
			}
	
		}
		else
		{
			switch($op2)
			{
				case "lis":
				$arq2 = "sig/exibe_arquivos.php";
				break;

				case "lis_imp":
				$arq2 = "sig/exibe_arquivos.php";
				break;
		
				case "env":
				$arq2 = "sig/envia_arquivos.php";
				break;		
			}

			include ($arq2);
			
		}		

	}	
	
	else if ($op=='ti_gt')
	{
		if ($op2=='')
		{
			if ($menu[ti_gt] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=ti_gt&op2=form">Nova<br /><br />
			<img src="imagens/icones/novo.gif" title="Entrada e Saída - Rápido" border="0" /></a>
			<?
			}
			if ($menu[ti_gt] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=ti_gt&op2=list&qu=pen">Listar Pendentes<br /><br />
			<img src="imagens/icones/listar.gif" title="Listar Pendentes" border="0" /></a>	
			<?
			}
			if ($menu[ti_gt] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=ti_gt&op2=list&dtd=<? echo date('Y-m-d'); ?>">Listar Feitas Hoje<br /><br />
			<img src="imagens/icones/listar.gif" title="Listar Feitas Hoje" border="0" /></a>				
			<?
			}

		}
		else
		{
			switch($op2)
			{
				case "form":
				$arq2 = "ti/gt_form.php";
				break;
			
				case "list":
				$arq2 = "ti/gt_lista.php";
				break;		
			}
			
			include ($arq2);
			
		}		

	}
	
	
	else if ($op=='tre_ind')
	{
		if ($op2=='')
		{
			if ($menu[tre_ind] >= 1)
			{
				$sql = "select id, nome_linha from nin_treinamentos_linhas order by ordem ASC";
				$sql = mysql_query($sql);
				
				while($reg = mysql_fetch_array($sql))
				{
			?>
			<a class="box_home" href="index.php?op=tre_ind&op2=<? echo $reg['id'];?>"><img style="margin-bottom:15px;" src="imagens/icones/novo.gif" title="<? echo $reg['nome_linha'];?>" border="0" /><br />
				<? echo $reg['nome_linha'];?>
			</a>
			<?
				}
			}
			if ($_SESSION[especialidade]=="programador_web")
			{
			?>
			<a class="box_home" href="index.php?op=tre_ind&op2=cad">Incluir Treinamento<br /><br />
			<img src="imagens/icones/novo.gif" title="Criar" border="0" /></a>
			<?
			}
		}
		else
		{
			switch($op2)
			{
				case "1":
				$arq2 = "treina/treinamentos.php";
				break;
				
				case "2":
				$arq2 = "treina/treinamentos.php";
				break;
				
				case "3":
				$arq2 = "treina/treinamentos.php";
				break;
				
				case "4":
				$arq2 = "treina/treinamentos.php";
				break;
				
				case "5":
				$arq2 = "treina/treinamentos.php";
				break;
				
				case "6":
				$arq2 = "treina/treinamentos.php";
				break;
				
				case "7":
				$arq2 = "treina/treinamentos.php";
				break;
				
				case "8":
				$arq2 = "treina/treinamentos.php";
				break;
				
				case "9":
				$arq2 = "treina/treinamentos.php";
				break;
				
				case "10":
				$arq2 = "treina/treinamentos.php";
				break;
				
				case "11":
				$arq2 = "treina/treinamentos.php";
				break;
				
				case "cad":
				$arq2 = "treina/form_treina.php";
				break;
			}
			include ($arq2);
		}		
	}
	
	
	
	else if ($op=='ti_gt')
	{
		if ($op2=='')
		{
			if ($menu[ti_gt] >= 4)
			{
			?>	
			<a class="box_home" href="index.php?op=ti_gt&op2=form">Nova<br /><br />
			<img src="imagens/icones/novo.gif" title="Entrada e Saída - Rápido" border="0" /></a>
			<?
			}
			if ($menu[ti_gt] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=ti_gt&op2=list&qu=pen">Listar Pendentes<br /><br />
			<img src="imagens/icones/listar.gif" title="Listar Pendentes" border="0" /></a>	
			<?
			}
			if ($menu[ti_gt] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=ti_gt&op2=list&dtd=<? echo date('Y-m-d'); ?>">Listar Feitas Hoje<br /><br />
			<img src="imagens/icones/listar.gif" title="Listar Feitas Hoje" border="0" /></a>				
			<?
			}

		}
		else
		{
			switch($op2)
			{
				case "form":
				$arq2 = "ti/gt_form.php";
				break;
			
				case "list":
				$arq2 = "ti/gt_lista.php";
				break;		
			}
			
			include ($arq2);
		}		
	}
	
		
	else if ($op=='tre_re')
	{
		if ($op2=='')
		{
			if ($menu[tre_re] == 4)
			{
			?>	
			<a class="box_home" href="index.php?op=tre_re&op2=user">Usuários<br /><br /><br />
			<img src="imagens/icones/clientes.gif" title="Relatório de Usuários" border="0" /></a>
			<?
			}
			if ($menu[tre_re] >= 1)
			{
			?>	
			<a class="box_home" href="index.php?op=tre_re&op2=treina">Treinamentos<br /><br /><br />
			<img src="imagens/icones/entrevista.gif" title="Relatório de Treinamentos" border="0" /></a>	
			<?
			}

		}
		else
		{
			switch($op2)
			{
				case "user":
				$arq2 = "treina/relatorios.php";
				break;
			
				case "treina":
				$arq2 = "treina/relatorios.php";
				break;		
			}
			
			include ($arq2);
			
		}		

	}	
	
	
	
	
	
?>
