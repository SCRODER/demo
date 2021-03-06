<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Ecs\Request\V20140526;

class DescribeNetworkInterfacesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "DescribeNetworkInterfaces");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $securityGroupId;

	private  $type;

	private  $pageNumber;

	private  $pageSize;

	private  $networkInterfaceName;

	private  $callerUid;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $callerBid;

	private  $ownerId;

	private  $vSwitchId;

	private  $instanceId;

	private  $primaryIpAddress;

	private  $NetworkInterfaceIds;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getSecurityGroupId() {
		return $this->securityGroupId;
	}

	public function setSecurityGroupId($securityGroupId) {
		$this->securityGroupId = $securityGroupId;
		$this->queryParameters["SecurityGroupId"]=$securityGroupId;
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
		$this->queryParameters["Type"]=$type;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getNetworkInterfaceName() {
		return $this->networkInterfaceName;
	}

	public function setNetworkInterfaceName($networkInterfaceName) {
		$this->networkInterfaceName = $networkInterfaceName;
		$this->queryParameters["NetworkInterfaceName"]=$networkInterfaceName;
	}

	public function getcallerUid() {
		return $this->callerUid;
	}

	public function setcallerUid($callerUid) {
		$this->callerUid = $callerUid;
		$this->queryParameters["callerUid"]=$callerUid;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getcallerBid() {
		return $this->callerBid;
	}

	public function setcallerBid($callerBid) {
		$this->callerBid = $callerBid;
		$this->queryParameters["callerBid"]=$callerBid;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getVSwitchId() {
		return $this->vSwitchId;
	}

	public function setVSwitchId($vSwitchId) {
		$this->vSwitchId = $vSwitchId;
		$this->queryParameters["VSwitchId"]=$vSwitchId;
	}

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getPrimaryIpAddress() {
		return $this->primaryIpAddress;
	}

	public function setPrimaryIpAddress($primaryIpAddress) {
		$this->primaryIpAddress = $primaryIpAddress;
		$this->queryParameters["PrimaryIpAddress"]=$primaryIpAddress;
	}

	public function getNetworkInterfaceIds() {
		return $this->NetworkInterfaceIds;
	}

	public function setNetworkInterfaceIds($NetworkInterfaceIds) {
		$this->NetworkInterfaceIds = $NetworkInterfaceIds;
		for ($i = 0; $i < count($NetworkInterfaceIds); $i ++) {	
			$this->queryParameters["NetworkInterfaceId.".($i+1)] = $NetworkInterfaceIds[$i];
		}
	}
	
}