<?php


class Validator
{

    public function validate_html($name)
    {
        $name = htmlspecialchars(trim(htmlentities($name, ENT_QUOTES, 'UTF-8')));
        return $name;
    }

    public function validate_quote($name)
    {
        $name = htmlentities($name, ENT_QUOTES, 'UTF-8');
        return $name;
    }

    public function validate($data)
    {
        foreach ($data as $d) {
            $d = $this->validate_html($d);
            $d = $this->validate_quote($d);
            if (empty($d)) {
                return false;
            }
        }

        return $data;
    }

}