<?php

function prepareVariables($page_name = "index")
{
	switch ($page_name){
		case "index":
			$vars['new_product'] = NewProduct();
			$vars['top_product'] = TopProduct();
			$vars['sale_product'] = SaleProduct();
			$vars['title'] =SITE_TITLE . " - Главная страница";
			$vars['content'] = '../templates/index.php';
			break;
			
		case "catalog":
			break;
		case "good":
			break;
	}
	return $vars;
}

function NewProduct()
{
	$sql = 'select * from goods order by date desc limit 6;';
	return getAssocResult($sql);
}

function TopProduct()
{
	$sql = 'select * from goods order by view desc, date desc limit 3;';
	return getAssocResult($sql);
}


function SaleProduct()
{
	$sql = 'select * from goods where status = "2" order by view desc limit 3;';
	return getAssocResult($sql);
}

