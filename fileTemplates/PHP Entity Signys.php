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
     * @ORM\Column(type="tString", name="OID${DS}${TABLE}")
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Doctrine\ORM\Id\SignysIdGenerator")
     */
    protected ${DS}id;
    
    /**
     * @ORM\Column(type="boolean", name="P${DS}DELETE")
     */
    protected ${DS}deleted;

}
