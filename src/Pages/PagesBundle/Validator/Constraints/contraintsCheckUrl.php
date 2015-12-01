<?php

namespace Pages\PagesBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;


/**
 * @Annotation 
 */
class contraintsCheckUrl extends Constraint {
    
    public $message = 'Le champs contient des liens nons valides';
    
    public function validatedBy()
    {
        return 'validatorCheckUrl';
    }
    
    
}

?>
