<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})

namespace ${NAMESPACE};
#end

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\MagicAccessors;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="${TABLE}")
 */

class ${NAME}
{
    use MagicAccessors;
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="ID")
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="GEN_${TABLE}_ID")
     */
    protected ${DS}id;

}
