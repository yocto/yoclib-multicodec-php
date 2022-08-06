<?php
namespace YOCLIB\Multiformats\Multicodec;

class Multicodec{

	public const IDENTITY = 0x00;
	public const CIDV1 = 0x01;
	/*DRAFT*/public const CIDV2 = 0x02;
	/*DRAFT*/public const CIDv3 = 0x03;
	public const IP4 = 0x04;
	public const TCP = 0x06;
	public const SHA1 = 0x11;
	public const SHA2_256 = 0x12;
	public const SHA2_512 = 0x13;
	public const SHA3_512 = 0x14;
	public const SHA3_384 = 0x15;
	public const SHA3_256 = 0x16;
	public const SHA3_224 = 0x17;
	//...
	public const SHA2_384 = 0x20;
	//...
	public const IP6 = 0x29;
	//...
	public const DAG_PB = 0x70;

}