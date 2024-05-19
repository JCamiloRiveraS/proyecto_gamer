<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\StreetViewPublish;

class LatLngBounds extends \Google\Model
{
  /**
   * @var LatLng
   */
  public $northeast;
  protected $northeastType = LatLng::class;
  protected $northeastDataType = '';
  /**
   * @var LatLng
   */
  public $southwest;
  protected $southwestType = LatLng::class;
  protected $southwestDataType = '';

  /**
   * @param LatLng
   */
  public function setNortheast(LatLng $northeast)
  {
    $this->northeast = $northeast;
  }
  /**
   * @return LatLng
   */
  public function getNortheast()
  {
    return $this->northeast;
  }
  /**
   * @param LatLng
   */
  public function setSouthwest(LatLng $southwest)
  {
    $this->southwest = $southwest;
  }
  /**
   * @return LatLng
   */
  public function getSouthwest()
  {
    return $this->southwest;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LatLngBounds::class, 'Google_Service_StreetViewPublish_LatLngBounds');
