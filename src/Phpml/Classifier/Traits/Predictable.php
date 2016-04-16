<?php
declare(strict_types = 1);

namespace Phpml\Classifier\Traits;

trait Predictable
{
    /**
     * @param array $samples
     *
     * @return mixed
     */
    public function predict(array $samples)
    {
        if (!is_array($samples[0])) {
            $predicted = $this->predictSample($samples);
        } else {
            $predicted = [];
            foreach ($samples as $index => $sample) {
                $predicted[$index] = $this->predictSample($sample);
            }
        }

        return $predicted;
    }

}
