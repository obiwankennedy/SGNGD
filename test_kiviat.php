<?php
/**!
 *
 *  Copyright 2008 Renaud Guezennec
 *
 *  This file is part of SGNGD.
 *
 *  SGNGD is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  SDNGD distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with SGNGD.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
/**
 * \author:Renaud Guezennec 
 * Contact me: http://renaudguezennec.homelinux.org/index,1,3.html
 * 
 * 
 * \brief Example of KiviatChart use.
 * \version 0.1
 * \date 28/03/2009
 */
require_once('Chart.php');
$chartsvg = new KiviatChart("kiviatChart SVG",FULLDEFINED);
/*$chartsvg->setStartColor(new Color(0,150,0));
$chartsvg->setEndColor(new Color(255,150,0));*/
$data[]=array('Life'=>3,'intellect'=>8,'Magic'=>9,'Speed'=>10,'Defense'=>4,'Endurance'=>4);
$data[]=array('Life'=>6,'intellect'=>6,'Magic'=>6,'Speed'=>8,'Defense'=>1,'Endurance'=>4);
$data[]=array('Life'=>9,'intellect'=>2,'Magic'=>2,'Speed'=>6,'Defense'=>7,'Endurance'=>4);
$chartsvg->AddData('Elf',$data[0],new Color(255,0,0));
$chartsvg->AddData('Golem',$data[1],new Color(0,255,0));
$chartsvg->AddData('Dwarf',$data[2],new Color(0,0,255));
$chartsvg->SetScale(5);
$chartsvg->Compute();
header('Content-Type: image/svg+xml');
echo $chartsvg->display();
?>
