import { Table, Avatar, Button } from 'antd';
import { useEffect, useState } from 'react';
import { DownloadOutlined } from '@ant-design/icons';

function StudentList() {
    const [items, setItems] = useState([]);

    const columns = [
        {
            title: 'Avatar',
            dataIndex: 'avatar',
            key: 'avatar',
            render: (text, record) => (
                // If(text){<Avatar src={text} />}else{<Avatar>{record.name}</Avatar>}
                text ? <Avatar src={text} size={60} /> : <Avatar size={60}>{record.name}</Avatar>
            ),
        },
        {
            title: 'Tên',
            dataIndex: 'name',
            key: 'name',
        },
        {
            title: 'Ngày Sinh',
            dataIndex: 'birthday',
            key: 'birthday',
        },
        {
            title: 'Số Điện Thoại',
            dataIndex: 'phone',
            key: 'phone',
        },
        {
            title: 'Lớp học',
            dataIndex: 'class',
            key: 'class',
        },
        {
            title: 'CMND',
            dataIndex: 'person_id',
            key: 'person_id',
        },
    ];

    useEffect(() => {
        reload()
    }, [])

    const reload = () => {
        fetch("http://thanhlong.ml/api/v1/hocsinh")
        .then(res => res.json())
        .then(
            (result) => {
                setItems(result)
                console.log(result[0])
            },
            (error) => {
            }
        )
    }

    const handleReload = () => {
        reload();
    }

    return (
        <>
            <Button onClick={handleReload} className="pull-right" type="primary" icon={<DownloadOutlined />} >Reload</Button>
            <Table dataSource={items} columns={columns} />;
        </>
    )
}

export default StudentList;