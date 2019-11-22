<?php
require_once("session.php");
/**
 * 與訊息相關的Class
 */
class Message extends Session
{
    private $mysqli;
    /**
     * 建立資料庫連線
     */
    public $memberId;
    public function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
        $this->getSession();
        // $this->memberId = $this->user["memberId"];
    }
    /**
     * 顯示所有留言
     */
    public function show()
    {
        $sql = "SELECT * FROM `message` ORDER BY date DESC";
        $result = $this->mysqli->query($sql);
        while ($row = $result->fetch_assoc()) {
            $all[] = $row;
        }
        return $all;
    }
    /**
     * 新增一筆留言
     */
    public function create($subject, $content)
    {

        $mId = $_SESSION['memberId'];
        $author = $_SESSION['memberName'];
        $content = str_replace("<", "&lt;", $content);

        $sql = "INSERT INTO message(memberId,author,subject,content)". "VALUES (?,?,?,?)";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('isss', $mId, $author, $subject, $content);
        $msg = $stmt->execute();
        if ($msg) {
            return json_encode(true);
        } else {
            return json_encode(false);
        }
    }
    /**
     * 刪除一筆留言
     */
    public function delete($id)
    {
        if($_SESSION["memberLevel"]===1){
            $sql = "DELETE FROM `message` WHERE `message`.`id` =? ";
            $stmt = $this->mysqli->prepare($sql);
            $stmt->bind_param('i', $id);
            $msg = $stmt->execute();
            if ($msg) {
                return json_encode(true);
            } else {
                return json_encode(false);
            }
        } else {
            $memberId=$_SESSION["memberId"];
            $sql = "DELETE FROM `message` WHERE `message`.`id` =? AND memberId=?";
            $stmt = $this->mysqli->prepare($sql);
            $stmt->bind_param('ii', $id,$memberId);
            $msg = $stmt->execute();
            if ($msg) {
                return json_encode(true);
            } else {
                return json_encode(false);
            }
        }
    }
    /**
     * 更新一筆留言
     */
    public function update($id, $content)
    {
        $memberId = $this->user["memberId"];
        $content = str_replace("<", "&lt;", $content);
        $sql = "UPDATE message SET content = ? WHERE id = ? AND memberId = ?";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('sii', $content, $id, $memberId);
        $msg = $stmt->execute();
        if ($msg) {
            return json_encode(true);
        } else {
            return json_encode(false);
        }
    }
}
