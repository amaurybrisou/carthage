<?php
// src/AppBundle/DataFixtures/ORM/LoadUserData.php

namespace AymardBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AymardBundle\Entity\Page;
use AymardBundle\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoadUserData implements FixtureInterface 
{
    public function load(ObjectManager $manager)
    {
        $page = new Page();
        $page->setTitle('home');
        $page->setSlug('home');
        $page->setDescription("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
        $manager->persist($page);
        $image = new Image();$image->setFile('bonnecat.jpeg');$image->setDescription('<p>"La bonne graine" 2011. Acrylique sur papier ingre. 48x63<br></p>');$image->setPage($page);$manager->persist($image);

        $page = new Page();
        $page->setTitle('biography');
        $page->setSlug('biography');
        $page->setDescription("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
        $manager->persist($page);
        $image = new Image();$image->setFile('aymard.jpeg');$image->setDescription('aymard.jpeg');$image->setPage($page);$manager->persist($image);

        //OILS
        $page = new Page();
        $page->setTitle('oils');
        $page->setSlug('oils');
        $page->setDescription("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
        $manager->persist($page);
        
        $image = new Image();$image->setFile('hu-160-2013-60x60aubordduprécipice.jpg');$image->setDescription('hu-160-2013-60x60aubordduprécipice.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-240-2014-61x50-aubord.jpg');$image->setDescription('hu-240-2014-61x50-aubord.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-110-2013-38x55-atable.jpg');$image->setDescription('hu-110-2013-38x55-atable.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-150a-2013-àdroiteouàgauche1.jpg');$image->setDescription('hu-150a-2013-àdroiteouàgauche1.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-220-201359x49blancsurfondbleu.jpg');$image->setDescription('hu-220-201359x49blancsurfondbleu.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-70-2012-60x60-orientation.jpg');$image->setDescription('hu-70-2012-60x60-orientation.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-420-2015-100x80-lefilconducteur.jpg');$image->setDescription('hu-420-2015-100x80-lefilconducteur.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-150b-2013-àgaucheouàdroite2.jpg');$image->setDescription('hu-150b-2013-àgaucheouàdroite2.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-150d-2013-agaucheouàdroite4.jpg');$image->setDescription('hu-150d-2013-agaucheouàdroite4.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-200-2013-61x50a.jpg');$image->setDescription('hu-200-2013-61x50a.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-330-2014-60x60-surunpréd\'herbeverte.jpg');$image->setDescription('hu-330-2014-60x60-surunpréd\'herbeverte.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-50-2011-60x60-l\'appel.jpg');$image->setDescription('hu-50-2011-60x60-l\'appel.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-340-2014-54x65-labalance.jpg');$image->setDescription('hu-340-2014-54x65-labalance.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-150-2013-60x60-adroiteouàgauche.jpg');$image->setDescription('hu-150-2013-60x60-adroiteouàgauche.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-130-2013-50x61-lagrandegueule.jpg');$image->setDescription('hu-130-2013-50x61-lagrandegueule.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-51-2012-50x65-méditationagitée.jpg');$image->setDescription('hu-51-2012-50x65-méditationagitée.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-270-2014-35x24-creully.jpg');$image->setDescription('hu-270-2014-35x24-creully.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-40-2011-60x60-labulle.jpg');$image->setDescription('hu-40-2011-60x60-labulle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-280-2014-46x33-entregrisetrouge.jpg');$image->setDescription('hu-280-2014-46x33-entregrisetrouge.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-100-2012115x91-newjerusalem.jpg');$image->setDescription('hu-100-2012115x91-newjerusalem.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-90-2012-100x100autoportrait.jpg');$image->setDescription('hu-90-2012-100x100autoportrait.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-310-2014-60x60-intérieur.jpg');$image->setDescription('hu-310-2014-60x60-intérieur.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-300-2014-50x65-dublancaunoir.jpg');$image->setDescription('hu-300-2014-50x65-dublancaunoir.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-20-1978-33x26.jpg');$image->setDescription('hu-20-1978-33x26.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-30-2010-100x100letempsd\'untourdumonde.jpg');$image->setDescription('hu-30-2010-100x100letempsd\'untourdumonde.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-60-2012-38x46-mesbarreaux.jpg');$image->setDescription('hu-60-2012-38x46-mesbarreaux.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-140-2013-50x100del\'ombreàlalumière.jpg');$image->setDescription('hu-140-2013-50x100del\'ombreàlalumière.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-230-2014-50x65-cielenconstruction.jpg');$image->setDescription('hu-230-2014-50x65-cielenconstruction.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-410-2015-61x50-rideaux.jpg');$image->setDescription('hu-410-2015-61x50-rideaux.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-370-2015-30x30-ensemble.jpg');$image->setDescription('hu-370-2015-30x30-ensemble.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-260-2014-30x30-oretargent.jpg');$image->setDescription('hu-260-2014-30x30-oretargent.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-10-1976-50x65.jpg');$image->setDescription('hu-10-1976-50x65.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-120-2013-46x33-blancmaquilllé.jpg');$image->setDescription('hu-120-2013-46x33-blancmaquilllé.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-320-2014-60x60-naissancedesgrains.jpg');$image->setDescription('hu-320-2014-60x60-naissancedesgrains.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-390-2015-60x60-soustension.jpg');$image->setDescription('hu-390-2015-60x60-soustension.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-350-2014-100x80-letag.jpg');$image->setDescription('hu-350-2014-100x80-letag.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-150c-2013-agaucheouàdroite3.jpg');$image->setDescription('hu-150c-2013-agaucheouàdroite3.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-250-2014-27x22-enigme.jpg');$image->setDescription('hu-250-2014-27x22-enigme.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-380-2015-30x30.jpg');$image->setDescription('hu-380-2015-30x30.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-400-2015-60x60-.jpg');$image->setDescription('hu-400-2015-60x60-.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-210-2013-80x80-lesgrainsdelaprécarité.jpg');$image->setDescription('hu-210-2013-80x80-lesgrainsdelaprécarité.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-190-2013-61x50-lalune.jpg');$image->setDescription('hu-190-2013-61x50-lalune.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-360-2015-41x27-aupied.jpg');$image->setDescription('hu-360-2015-41x27-aupied.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-290-2014-50x65-dialoguedurouge.jpg');$image->setDescription('hu-290-2014-50x65-dialoguedurouge.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-80-2012-61x50-enquatre.jpg');$image->setDescription('hu-80-2012-61x50-enquatre.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-170-2013-61x50-autourdumasque.jpg');$image->setDescription('hu-170-2013-61x50-autourdumasque.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('hu-180-2013-61x50-entredeux.jpg');$image->setDescription('hu-180-2013-61x50-entredeux.jpg');$image->setPage($page);$manager->persist($image);

        //Acrylics
        $page = new Page();
        $page->setTitle('acrylics');
        $page->setSlug('acrylics');
        $manager->persist($page);
 
        $image = new Image();$image->setFile('ac-210-2012-50x65.jpg');$image->setDescription('ac-210-2012-50x65.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-20-1976-50x65.jpg');$image->setDescription('ac-20-1976-50x65.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-140-2011-60x60.jpg');$image->setDescription('ac-140-2011-60x60.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-230-2015-470x180-silence.jpg');$image->setDescription('ac-230-2015-470x180-silence.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-130-2011-60x60-2.jpg');$image->setDescription('ac-130-2011-60x60-2.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-150-2011-60x80.jpg');$image->setDescription('ac-150-2011-60x80.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-100-2011-30x40.jpg');$image->setDescription('ac-100-2011-30x40.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-10-1976-50x65.jpg');$image->setDescription('ac-10-1976-50x65.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-120-2011-50x65-lesformesauxpiedsdeplomb.jpg');$image->setDescription('ac-120-2011-50x65-lesformesauxpiedsdeplomb.jpg');$image->setPage($page);$manager->persist($image);
       $image = new Image();$image->setFile('ac-90-2010-35x28-fenêtre.jpg');$image->setDescription('ac-90-2010-35x28-fenêtre.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-40-1985-50x50.jpg');$image->setDescription('ac-40-1985-50x50.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-190-2012-50x65.jpg');$image->setDescription('ac-190-2012-50x65.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-110-2011-30x50.jpg');$image->setDescription('ac-110-2011-30x50.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-200-2012-50x60.jpg');$image->setDescription('ac-200-2012-50x60.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-60-1985-55x40.jpg');$image->setDescription('ac-60-1985-55x40.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-30-1978-50x65.jpg');$image->setDescription('ac-30-1978-50x65.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-160-2011-60x80.jpg');$image->setDescription('ac-160-2011-60x80.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-80-2009-60x80.jpg');$image->setDescription('ac-80-2009-60x80.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-170-2011-80x60.jpg');$image->setDescription('ac-170-2011-80x60.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-70-2005-50x50.jpg');$image->setDescription('ac-70-2005-50x50.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-220-2012-60x80-mesarmes.jpg');$image->setDescription('ac-220-2012-60x80-mesarmes.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-180-2011-40x30.jpg');$image->setDescription('ac-180-2011-40x30.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-50-1985-50x65.jpg');$image->setDescription('ac-50-1985-50x65.jpg');$image->setPage($page);$manager->persist($image);
        
        //DESSINS
        $page = new Page();
        $page->setTitle('drawings');
        $page->setSlug('drawings');
        $page->setDescription("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
        $manager->persist($page);
        
        $image = new Image();$image->setFile('de-11.jpg');$image->setDescription('de-11.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-13.jpg');$image->setDescription('de-13.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-12.jpg');$image->setDescription('de-12.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-27.jpg');$image->setDescription('de-27.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-30.jpg');$image->setDescription('de-30.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-39.jpg');$image->setDescription('de-39.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-44.jpg');$image->setDescription('de-44.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-23.jpg');$image->setDescription('de-23.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-18.jpg');$image->setDescription('de-18.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-31.jpg');$image->setDescription('de-31.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-10.jpg');$image->setDescription('de-10.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-14.jpg');$image->setDescription('de-14.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-24.jpg');$image->setDescription('de-24.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-28.jpg');$image->setDescription('de-28.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-46.jpg');$image->setDescription('de-46.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-43.jpg');$image->setDescription('de-43.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-19.jpg');$image->setDescription('de-19.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-35.jpg');$image->setDescription('de-35.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-32.jpg');$image->setDescription('de-32.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-42.jpg');$image->setDescription('de-42.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-37.jpg');$image->setDescription('de-37.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-38.jpg');$image->setDescription('de-38.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-21.jpg');$image->setDescription('de-21.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-16.jpg');$image->setDescription('de-16.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-40.jpg');$image->setDescription('de-40.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-47.jpg');$image->setDescription('de-47.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-48.jpg');$image->setDescription('de-48.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-33.jpg');$image->setDescription('de-33.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-36.jpg');$image->setDescription('de-36.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-26.jpg');$image->setDescription('de-26.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-34.jpg');$image->setDescription('de-34.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-25.jpg');$image->setDescription('de-25.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-41.jpg');$image->setDescription('de-41.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-45.jpg');$image->setDescription('de-45.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-29.jpg');$image->setDescription('de-29.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-22.jpg');$image->setDescription('de-22.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-20.jpg');$image->setDescription('de-20.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-17.jpg');$image->setDescription('de-17.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('de-15.jpg');$image->setDescription('de-15.jpg');$image->setPage($page);$manager->persist($image);
        
        
        //GOUACHES1
        $page = new Page();
        $page->setTitle('gouaches-1');
        $page->setSlug('gouaches-1');
        $page->setDescription("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
        $manager->persist($page);

        $image = new Image();$image->setFile('go-250.jpg');$image->setDescription('go-250.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-520.jpg');$image->setDescription('go-520.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-550.jpg');$image->setDescription('go-550.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-290.jpg');$image->setDescription('go-290.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-710.jpg');$image->setDescription('go-710.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-200.jpg');$image->setDescription('go-200.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-50-1972.jpg');$image->setDescription('go-50-1972.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-330-2015-gouachesurpapier-2.jpg');$image->setDescription('go-330-2015-gouachesurpapier-2.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-60-2012-25x25.jpg');$image->setDescription('go-60-2012-25x25.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-700.jpg');$image->setDescription('go-700.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-610.jpg');$image->setDescription('go-610.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-570.jpg');$image->setDescription('go-570.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-780.jpg');$image->setDescription('go-780.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('g0-10-1972-paysage.jpg');$image->setDescription('g0-10-1972-paysage.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-630.jpg');$image->setDescription('go-630.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-360.jpg');$image->setDescription('go-360.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-620.jpg');$image->setDescription('go-620.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-140.jpg');$image->setDescription('go-140.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-170.jpg');$image->setDescription('go-170.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-540.jpg');$image->setDescription('go-540.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-670.jpg');$image->setDescription('go-670.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-110.jpg');$image->setDescription('go-110.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-720.jpg');$image->setDescription('go-720.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-40-1972.jpg');$image->setDescription('go-40-1972.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-160.jpg');$image->setDescription('go-160.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-600.jpg');$image->setDescription('go-600.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-130.jpg');$image->setDescription('go-130.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-530.jpg');$image->setDescription('go-530.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-510.jpg');$image->setDescription('go-510.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-270.jpg');$image->setDescription('go-270.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-810.jpg');$image->setDescription('go-810.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-260.jpg');$image->setDescription('go-260.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-70-2012-25x25.jpg');$image->setDescription('go-70-2012-25x25.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-500.jpg');$image->setDescription('go-500.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-470.jpg');$image->setDescription('go-470.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-560.jpg');$image->setDescription('go-560.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-310-2015-dialoguedescarmélites.jpg');$image->setDescription('go-310-2015-dialoguedescarmélites.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-350.jpg');$image->setDescription('go-350.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-790.jpg');$image->setDescription('go-790.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-650.jpg');$image->setDescription('go-650.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-490.jpg');$image->setDescription('go-490.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-300.jpg');$image->setDescription('go-300.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-180.jpg');$image->setDescription('go-180.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-800.jpg');$image->setDescription('go-800.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-450.jpg');$image->setDescription('go-450.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-340.jpg');$image->setDescription('go-340.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-390.jpg');$image->setDescription('go-390.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-760.jpg');$image->setDescription('go-760.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-750.jpg');$image->setDescription('go-750.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-90.jpg');$image->setDescription('go-90.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-80-2012-25x25.jpg');$image->setDescription('go-80-2012-25x25.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-410.jpg');$image->setDescription('go-410.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-120.jpg');$image->setDescription('go-120.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-280.jpg');$image->setDescription('go-280.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-100.jpg');$image->setDescription('go-100.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-640.jpg');$image->setDescription('go-640.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-420.jpg');$image->setDescription('go-420.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-740.jpg');$image->setDescription('go-740.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-370.jpg');$image->setDescription('go-370.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-460.jpg');$image->setDescription('go-460.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-190.jpg');$image->setDescription('go-190.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-480.jpg');$image->setDescription('go-480.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-590.jpg');$image->setDescription('go-590.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-220.jpg');$image->setDescription('go-220.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-210.jpg');$image->setDescription('go-210.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-30-1972.jpg');$image->setDescription('go-30-1972.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-380.jpg');$image->setDescription('go-380.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-400.jpg');$image->setDescription('go-400.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-240.jpg');$image->setDescription('go-240.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-660.jpg');$image->setDescription('go-660.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-230.jpg');$image->setDescription('go-230.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-770.jpg');$image->setDescription('go-770.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-20-1972.jpg');$image->setDescription('go-20-1972.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-680.jpg');$image->setDescription('go-680.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-440.jpg');$image->setDescription('go-440.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-690.jpg');$image->setDescription('go-690.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-320--2015-gouachesurpapier-1.jpg');$image->setDescription('go-320--2015-gouachesurpapier-1.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-150.jpg');$image->setDescription('go-150.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-430.jpg');$image->setDescription('go-430.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-730.jpg');$image->setDescription('go-730.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-580.jpg');$image->setDescription('go-580.jpg');$image->setPage($page);$manager->persist($image);
        
        //GOLD
        $page = new Page();
        $page->setTitle('gold');
        $page->setSlug('gold');
        $page->setDescription("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
        $manager->persist($page);
        $image = new Image();$image->setFile('or30-1984-séguret-40x16.jpg');$image->setDescription('or30-1984-séguret-40x16.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('or20b-1983-hamel-triptique-détails.jpg');$image->setDescription('or20b-1983-hamel-triptique-details.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('or20a-1983-hamel-triptique-91x80+détails.jpg');$image->setDescription('or20a-1983-hamel-triptique-91x80-details.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('or20-1983-hamel-triptique-91x80.jpg');$image->setDescription('or20-1983-hamel-triptique-91x80.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('or40-1984-lemalène-31x20.jpg');$image->setDescription('or40-1984-lemalène-31x20.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('or10-1984-ségurés-42x20.jpg');$image->setDescription('or10-1984-ségurés-42x20.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('or50-1984-javols-20x31.jpg');$image->setDescription('or50-1984-javols-20x31.jpg');$image->setPage($page);$manager->persist($image);
                
                
        //TECHN DIVERSES
        $page = new Page();
        $page->setTitle('misc');
        $page->setSlug('misc');
        $page->setDescription("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
        $manager->persist($page);         
        $image = new Image();$image->setFile('pa-30-pastel.jpg');$image->setDescription('pa-30-pastel.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-10-acryligueetpastel.jpg');$image->setDescription('ac-10-acryligueetpastel.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('bo-10-gouachesurbois.jpg');$image->setDescription('bo-10-gouachesurbois.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-160-aquarelle.jpg');$image->setDescription('aq-160-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('pa-40-pastel.jpg');$image->setDescription('pa-40-pastel.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-140-aquarelle.jpg');$image->setDescription('aq-140-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-40-aquarelle.jpg');$image->setDescription('aq-40-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('bo-30-gouachesurbois.jpg');$image->setDescription('bo-30-gouachesurbois.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-110-aquarelle.jpg');$image->setDescription('aq-110-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-20-acrylique.jpg');$image->setDescription('ac-20-acrylique.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-120-aquarelle.jpg');$image->setDescription('aq-120-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-20a-acrylique.jpg');$image->setDescription('ac-20a-acrylique.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('pa-20-pastel.jpg');$image->setDescription('pa-20-pastel.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-180-aquarelle.jpg');$image->setDescription('aq-180-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-20c-acrylique.jpg');$image->setDescription('ac-20c-acrylique.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-130-aquarelle.jpg');$image->setDescription('aq-130-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-100-aquarelle.jpg');$image->setDescription('aq-100-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-90-aquarelle.jpg');$image->setDescription('aq-90-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-170-aquarelle.jpg');$image->setDescription('aq-170-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-80-aquarelle.jpg');$image->setDescription('aq-80-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-60-aquarelle.jpg');$image->setDescription('aq-60-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-150-aquarelle.jpg');$image->setDescription('aq-150-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('go-10-gouacheetpastel.jpg');$image->setDescription('go-10-gouacheetpastel.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-20-aquarelle.jpg');$image->setDescription('aq-20-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-30-aquarelle.jpg');$image->setDescription('aq-30-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-70-aquarelle.jpg');$image->setDescription('aq-70-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-10-aquarelle.jpg');$image->setDescription('aq-10-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('aq-50-aquarelle.jpg');$image->setDescription('aq-50-aquarelle.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('bo-20-gouachesurbois.jpg');$image->setDescription('bo-20-gouachesurbois.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('cr-10-crayonsdecouleur.jpg');$image->setDescription('cr-10-crayonsdecouleur.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('ac-20b-acrylique.jpg');$image->setDescription('ac-20b-acrylique.jpg');$image->setPage($page);$manager->persist($image);
        $image = new Image();$image->setFile('pa-10-aquarelleetpastel.jpg');$image->setDescription('pa-10-aquarelleetpastel.jpg');$image->setPage($page);$manager->persist($image);
        $manager->flush();
    }
}
?>