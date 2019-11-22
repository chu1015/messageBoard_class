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
    public $list = 5;

    public function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
        $this->getSession();
        // $this->memberId = $this->user["memberId"];
    }

    ##計算頁有幾頁
    public function createPage()
    {
        // $list=5;
        $sql = "SELECT COUNT(*) as total FROM `message`";
        $result = $this->mysqli->query($sql);
        $res = $result->fetch_assoc();
        $res = ceil($res['total'] / $this->list);

        return $res;
    }


    /**
     * 製作分頁
     */
    public function showpage($page)
    {
        ##每頁顯示數量
        // $list = 5;
        ##總留言數
        $sql = "SELECT COUNT(*) as total FROM `message`";
        $result = $this->mysqli->query($sql);
        $res = $result->fetch_assoc();
        // return $res['total'];
        // echo $res['total'];
        ##總頁數
        // $pages = ceil($res / $list);
        $pages = isset($page)?$page:1;
        $start = ($pages-1) * $this->list;

        $sql = "SELECT * FROM `message` ORDER BY `date` DESC LIMIT {$start}, {$this->list}";
        $result = $this->mysqli->query($sql);
        while( $row = $result->fetch_assoc()){
            $all[] = $row;
        }
        return $all;
        
    }

    /**
     * 顯示所有留言
     */
    public function show()
    {
        $sql = "SELECT * FROM `message` ORDER BY date DESC";
        $result = $this->mysqli->query($sql);

        while ( $row = $result->fetch_assoc()) {
            $all[] = $row;
        }
        return $all;
    }

    /**
     * 新增一筆留言
     */
    public function create($subject, $content)
    {

        $mId = $this->user["memberId"];
        $author =  $this->user["name"];
        $content = str_replace("<", "&lt;", $content);
        date_default_timezone_set("Asia/Taipei");
        $time=date("Y-m-d H:i:s");

        $sql = "INSERT INTO message(memberId,author,subject,content,date)". "VALUES (?,?,?,?,?)";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('issss', $mId, $author, $subject, $content,$time);
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
        if ($this->user['memberLevel'] === 1) {
            $sql = "DELETE FROM `message` WHERE `message`.`id` =?";
            $stmt = $this->mysqli->prepare($sql);
            $stmt->bind_param('i', $id);
            $msg = $stmt->execute();
            if ($msg) {
                return json_encode(true);
            } else {
                return json_encode(false);
            }
        } else {
            $memberId = $this->user['memberId'];
            $sql = "DELETE FROM `message` WHERE `message`.`id` =? AND memberId=?";
            $stmt = $this->mysqli->prepare($sql);
            $stmt->bind_param('ii', $id, $memberId);
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
