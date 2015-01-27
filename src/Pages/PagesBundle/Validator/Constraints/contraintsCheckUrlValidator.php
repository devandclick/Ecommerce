<?php

namespace Pages\PagesBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Pages\PagesBundle\Services\CurlUrl;

class contraintsCheckUrlValidator extends ConstraintValidator {
    
    private $curl;
    
    public function __construct(CurlUrl $curl)
    {
        $this->curl = $curl;
    }
    
    public function validate($value, Constraint $constraint)
    {
        if ($this->curl->findUrl($value)) {
            $this->context->addViolation($constraint->message);
        }
    }
    
}

?>
