<?php

/**
 * @Entity
 * @Table(name="quiz_questions")
 */
class Questions
{
	/** @var @Column (type="integer")
	 * @GeneratedValue
	 */
	private $id;
	/** @var @Column (type="integer") */
	private $questionId;
	/** @var @Column (type="integer") */
	private $lockStatus;
	/** @var @Column (type="datetime", name="created_at") */
	private $createdAt;
	/** @var @Column (type="datetime", name="updated_at") */
	private $updatedAt;
}